import { GoogleGenAI, Type, Schema } from "@google/genai";
import { GemModel, StorySegment, CharacterId } from "../types";
import { getActiveCharacterPrompt, CHARACTERS, STORY_CHARACTERS } from "../agents/characters";

const apiKey = process.env.API_KEY;
if (!apiKey) {
  console.error("API_KEY is missing from environment variables");
}

const ai = new GoogleGenAI({ apiKey: apiKey || 'dummy-key-to-prevent-crash-but-will-fail-calls' });

const CHARACTER_IDS = Object.keys(CHARACTERS) as CharacterId[];
const CHARACTER_ID_ENUM = CHARACTER_IDS.map(id => id as string);

function buildSystemInstruction(activeCharacters: CharacterId[]): string {
  const characterBlock = getActiveCharacterPrompt(activeCharacters);
  return `
Eres un guionista de cómics divertidos e interactivos para todos los públicos.
El escenario es "Adrihosan", una tienda real de azulejos, baños y cocinas con pasillos de baldosas brillantes, expositores de grifos, bañeras modernas y sacos de cemento cola.

## PERSONAJES ACTIVOS EN ESTA ESCENA

${characterBlock}

## INSTRUCCIONES
- Genera la narrativa en español.
- El campo "narrative" es la descripción del narrador de lo que ocurre en la escena.
- El campo "dialogue" contiene las líneas de diálogo o pensamientos de cada personaje activo. Cada personaje debe hablar según su personalidad definida arriba.
- Solo incluye diálogo de los personajes listados en "activeCharacters".
- El campo "nextCharacters" indica qué personajes deberían aparecer en el siguiente panel (puedes añadir o quitar personajes para que la historia sea dinámica).
- Mantén el tono alegre, un poco travieso pero inocente.
`;
}

const storySchema: Schema = {
  type: Type.OBJECT,
  properties: {
    narrative: {
      type: Type.STRING,
      description: "La narración de lo que ocurre en este panel del cómic. Máximo 3 frases.",
    },
    imagePrompt: {
      type: Type.STRING,
      description: "Una descripción visual detallada de la escena para generar una imagen. Describe a los personajes presentes y el entorno de la tienda de azulejos.",
    },
    dialogue: {
      type: Type.ARRAY,
      items: {
        type: Type.OBJECT,
        properties: {
          characterId: {
            type: Type.STRING,
            description: `ID del personaje que habla. Valores posibles: ${CHARACTER_ID_ENUM.join(', ')}`,
          },
          text: {
            type: Type.STRING,
            description: "Lo que dice o piensa el personaje. Máximo 2 frases.",
          },
        },
        required: ["characterId", "text"],
      },
      description: "Líneas de diálogo o pensamientos de los personajes activos en esta escena.",
    },
    nextCharacters: {
      type: Type.ARRAY,
      items: {
        type: Type.STRING,
        description: `ID de personaje. Valores posibles: ${CHARACTER_ID_ENUM.join(', ')}`,
      },
      description: "Personajes que aparecerán en el siguiente panel. Siempre incluir 'nube' y 'narrador'.",
    },
    choices: {
      type: Type.ARRAY,
      items: {
        type: Type.OBJECT,
        properties: {
          text: { type: Type.STRING, description: "El texto del botón para el usuario" },
          action: { type: Type.STRING, description: "Un resumen corto de la acción para el prompt siguiente" },
        },
        required: ["text", "action"],
      },
      description: "2 opciones posibles para continuar la historia.",
    },
  },
  required: ["narrative", "imagePrompt", "dialogue", "nextCharacters", "choices"],
};

type StoryResponse = Omit<StorySegment, 'id' | 'imageData' | 'selectedChoice'>;

export const generateStorySegment = async (
  history: string,
  userChoice: string,
  activeCharacters: CharacterId[],
): Promise<StoryResponse> => {
  try {
    const activeNames = activeCharacters
      .map(id => CHARACTERS[id])
      .filter(Boolean)
      .map(c => `${c.emoji} ${c.name}`)
      .join(', ');

    const prompt = `
      Historia previa:
      ${history}

      El usuario ha elegido: "${userChoice}".
      Personajes activos en esta escena: ${activeNames}.

      Genera el siguiente segmento de la historia.
      Asegúrate de que la trama avance. Nube debe interactuar con los personajes presentes y con elementos de la tienda de azulejos (baldosas, grifos, dependientes, cajas).
      Incluye diálogo o pensamientos de los personajes activos, cada uno con su personalidad.
    `;

    const response = await ai.models.generateContent({
      model: GemModel.TEXT,
      contents: prompt,
      config: {
        systemInstruction: buildSystemInstruction(activeCharacters),
        responseMimeType: "application/json",
        responseSchema: storySchema,
        temperature: 1,
      },
    });

    const text = response.text;
    if (!text) throw new Error("No response text from Gemini");

    const parsed = JSON.parse(text);

    // Validate and normalize characterIds in dialogue
    const dialogue = (parsed.dialogue || []).map((line: { characterId: string; text: string }) => ({
      characterId: CHARACTER_IDS.includes(line.characterId as CharacterId)
        ? line.characterId as CharacterId
        : 'narrador' as CharacterId,
      text: line.text,
    }));

    // Validate nextCharacters - always ensure nube and narrador
    const rawNext = (parsed.nextCharacters || []) as string[];
    const nextChars = rawNext.filter((id): id is CharacterId => CHARACTER_IDS.includes(id as CharacterId));
    if (!nextChars.includes('nube')) nextChars.unshift('nube');
    if (!nextChars.includes('narrador')) nextChars.push('narrador');

    return {
      narrative: parsed.narrative,
      imagePrompt: parsed.imagePrompt,
      dialogue,
      activeCharacters: nextChars,
      choices: parsed.choices,
    };
  } catch (error) {
    console.error("Error generating story text:", error);
    return {
      narrative: "Nube se ha despistado un poco oliendo una baldosa hidráulica muy bonita. (Error de conexión)",
      imagePrompt: "Maltese puppy looking confused at a tile",
      dialogue: [
        { characterId: 'nube', text: '¡Guau! ¿Qué ha pasado?' },
        { characterId: 'narrador', text: 'Parece que ha habido un pequeño problema técnico...' },
      ],
      activeCharacters: ['nube', 'narrador'],
      choices: [
        { text: "Intentar de nuevo", action: "retry" },
        { text: "Ir a la salida", action: "exit" },
      ],
    };
  }
};

export const generatePanelImage = async (prompt: string): Promise<string> => {
  try {
    const response = await ai.models.generateContent({
      model: GemModel.IMAGE,
      contents: {
        parts: [{ text: prompt }],
      },
      config: {},
    });

    if (response.candidates && response.candidates[0].content.parts) {
      for (const part of response.candidates[0].content.parts) {
        if (part.inlineData && part.inlineData.data) {
          return `data:${part.inlineData.mimeType || 'image/png'};base64,${part.inlineData.data}`;
        }
      }
    }

    throw new Error("No image data found in response");
  } catch (error) {
    console.error("Error generating image:", error);
    return `https://picsum.photos/seed/${Date.now()}/512/512`;
  }
};

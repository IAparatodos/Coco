import { GoogleGenAI, Type, Schema } from "@google/genai";
import { GemModel, StorySegment } from "../types";

// Ensure API Key is present
const apiKey = process.env.API_KEY;
if (!apiKey) {
  console.error("API_KEY is missing from environment variables");
}

const ai = new GoogleGenAI({ apiKey: apiKey || 'dummy-key-to-prevent-crash-but-will-fail-calls' });

const SYSTEM_INSTRUCTION = `
Eres un guionista de cómics divertidos e interactivos para todos los públicos.
Los personajes son:
- "Cocó": la protagonista, una perrita Bichón Maltés blanca, pequeña, peluda y muy curiosa.
- "Ricardo": el dueño de la tienda, un hombre simpático y trabajador que adora a Cocó aunque a veces le desesperen sus travesuras.
- "Amparo": la mujer de Ricardo y copropietaria de la tienda, cariñosa pero con carácter, siempre intenta mantener el orden.
- "Azulejo": un gato atigrado que vive en la tienda, es el mejor amigo de Cocó y su compañero de aventuras.
El escenario es "Adrihosan", una tienda real de azulejos, baños y cocinas. Es un lugar con pasillos de baldosas brillantes, expositores de grifos, bañeras modernas y sacos de cemento cola.
Tu tono debe ser alegre, un poco travieso pero inocente. Haz que los personajes interactúen entre ellos.
Genera la narrativa en español.
`;

const storySchema: Schema = {
  type: Type.OBJECT,
  properties: {
    narrative: {
      type: Type.STRING,
      description: "La narración de lo que ocurre en este panel del cómic. Máximo 3 frases.",
    },
    imagePrompt: {
      type: Type.STRING,
      description: "Una descripción visual detallada de la escena para generar una imagen. Describe a los personajes (Cocó, Ricardo, Amparo, Azulejo) y el entorno de la tienda de azulejos.",
    },
    choices: {
      type: Type.ARRAY,
      items: {
        type: Type.OBJECT,
        properties: {
          text: { type: Type.STRING, description: "El texto del botón para el usuario" },
          action: { type: Type.STRING, description: "Un resumen corto de la acción para el prompt siguiente" }
        },
        required: ["text", "action"]
      },
      description: "2 opciones posibles para continuar la historia."
    }
  },
  required: ["narrative", "imagePrompt", "choices"]
};

export const generateStorySegment = async (history: string, userChoice: string): Promise<Omit<StorySegment, 'id' | 'imageData'>> => {
  try {
    const prompt = `
      Historia previa:
      ${history}
      
      El usuario ha elegido: "${userChoice}".
      
      Genera el siguiente segmento de la historia.
      Asegúrate de que la trama avance. Cocó debe interactuar con Ricardo, Amparo, Azulejo y con elementos de la tienda de azulejos (baldosas, grifos, bañeras, cajas).
    `;

    const response = await ai.models.generateContent({
      model: GemModel.TEXT,
      contents: prompt,
      config: {
        systemInstruction: SYSTEM_INSTRUCTION,
        responseMimeType: "application/json",
        responseSchema: storySchema,
        temperature: 1, // High creativity for fun stories
      },
    });

    const text = response.text;
    if (!text) throw new Error("No response text from Gemini");

    return JSON.parse(text) as Omit<StorySegment, 'id' | 'imageData'>;
  } catch (error) {
    console.error("Error generating story text:", error);
    // Fallback in case of error to keep app alive
    return {
      narrative: "Cocó se ha despistado un poco oliendo una baldosa hidráulica muy bonita. (Error de conexión)",
      imagePrompt: "Maltese puppy looking confused at a tile",
      choices: [
        { text: "Intentar de nuevo", action: "retry" },
        { text: "Ir a la salida", action: "exit" }
      ]
    };
  }
};

export const generatePanelImage = async (prompt: string): Promise<string> => {
  try {
    const response = await ai.models.generateContent({
      model: GemModel.IMAGE,
      contents: {
        parts: [
          { text: prompt }
        ]
      },
      config: {
        // Using generateContent for image model as per 2.5-flash-image guidelines
        // We do not set responseMimeType or schema for image models
      }
    });

    // Iterate parts to find inlineData (the image)
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
    // Return a fallback placeholder URL if generation fails
    return `https://picsum.photos/seed/${Date.now()}/512/512`;
  }
};

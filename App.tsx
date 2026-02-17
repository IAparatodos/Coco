import React, { useState, useEffect, useRef } from 'react';
import { Panel } from './components/Panel';
import { LoadingSpinner } from './components/LoadingSpinner';
import { generateStorySegment, generatePanelImage } from './services/gemini';
import { StorySegment, CharacterId } from './types';
import { CHARACTERS, INITIAL_CHARACTERS } from './agents/characters';

const INITIAL_PROMPT = "Inicio de la historia: Una adorable perrita Bichón Maltés llamada 'Cocó' entra moviendo la cola en 'Adrihosan', una tienda de azulejos y reformas muy elegante. Hay muchas texturas y brillos.";

const App: React.FC = () => {
  const [storyPanels, setStoryPanels] = useState<StorySegment[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [imageLoading, setImageLoading] = useState<boolean>(false);
  const [gameStarted, setGameStarted] = useState<boolean>(false);
  const [activeCharacters, setActiveCharacters] = useState<CharacterId[]>(INITIAL_CHARACTERS);
  const bottomRef = useRef<HTMLDivElement>(null);

  const handleStart = async () => {
    setGameStarted(true);
    await advanceStory(INITIAL_PROMPT);
  };

  const advanceStory = async (userChoice: string) => {
    setLoading(true);
    try {
      const historyText = storyPanels.map(p => {
        const dialogueText = p.dialogue
          ?.map(d => {
            const char = CHARACTERS[d.characterId];
            return `${char?.name || d.characterId}: "${d.text}"`;
          })
          .join('\n') || '';
        return `Narrador: ${p.narrative}\n${dialogueText}\nOpción elegida: ${p.selectedChoice || 'Inicio'}`;
      }).join('\n---\n');

      const segment = await generateStorySegment(historyText, userChoice, activeCharacters);

      const newPanelId = Date.now();
      const partialPanel: StorySegment = {
        ...segment,
        id: newPanelId,
        imageData: null,
      };

      setStoryPanels(prev => [...prev, partialPanel]);
      setActiveCharacters(segment.activeCharacters);
      setLoading(false);
      setImageLoading(true);

      // Build image prompt that includes all visible characters
      const characterDescriptions = segment.activeCharacters
        .filter(id => id !== 'narrador')
        .map(id => CHARACTERS[id]?.description || '')
        .filter(Boolean)
        .join('. ');

      const fullImagePrompt = `Cómic, estilo dibujo animado digital vibrante. En una tienda de azulejos (Adrihosan). Personajes: ${characterDescriptions}. ${segment.imagePrompt}`;

      const base64Image = await generatePanelImage(fullImagePrompt);

      setStoryPanels(prev => prev.map(p =>
        p.id === newPanelId ? { ...p, imageData: base64Image } : p
      ));

    } catch (error) {
      console.error("Error generating story:", error);
      alert("Hubo un error conectando con la IA. Por favor intenta de nuevo.");
    } finally {
      setLoading(false);
      setImageLoading(false);
    }
  };

  useEffect(() => {
    if (bottomRef.current) {
      bottomRef.current.scrollIntoView({ behavior: 'smooth' });
    }
  }, [storyPanels, loading, imageLoading]);

  if (!gameStarted) {
    return (
      <div className="min-h-screen flex flex-col items-center justify-center bg-blue-50 p-4">
        <div className="max-w-md w-full bg-white rounded-xl shadow-2xl overflow-hidden border-4 border-blue-400">
          <div className="bg-blue-500 p-6 text-white text-center">
            <h1 className="text-4xl font-bold mb-2">Cocó en Adrihosan</h1>
            <p className="text-blue-100 font-bold text-lg">Una Aventura Interactiva</p>
          </div>
          <div className="p-8 text-center">
            <div className="mb-4 text-5xl">🐶✨</div>
            <p className="text-lg text-gray-700 mb-4">
              Acompaña a <strong>Cocó</strong>, la Bichón Maltés más curiosa, en su visita a la tienda de azulejos.
              ¡Tú decides qué trastadas hará!
            </p>
            <div className="mb-6 flex flex-wrap justify-center gap-2">
              {Object.values(CHARACTERS)
                .filter(c => c.id !== 'narrador')
                .map(c => (
                  <span key={c.id} className="text-sm bg-gray-100 rounded-full px-3 py-1 text-gray-600">
                    {c.emoji} {c.name}
                  </span>
                ))}
            </div>
            <button
              onClick={handleStart}
              className="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-lg transition-colors text-xl shadow-lg transform hover:scale-105"
            >
              ¡Empezar la Aventura!
            </button>
          </div>
        </div>
      </div>
    );
  }

  return (
    <div className="min-h-screen bg-slate-100 py-8 px-4 md:px-0">
      <div className="max-w-2xl mx-auto space-y-8 pb-32">
        <header className="text-center mb-8">
          <h1 className="text-3xl font-bold text-blue-600">Las Aventuras de Cocó</h1>
          <p className="text-gray-500">En la tienda Adrihosan</p>
        </header>

        {storyPanels.map((panel, index) => (
          <Panel
            key={panel.id}
            data={panel}
            onChoice={(choice) => advanceStory(choice)}
            isLast={index === storyPanels.length - 1}
            disabled={loading || imageLoading}
          />
        ))}

        {loading && (
          <div className="flex justify-center items-center p-12 bg-white rounded-lg shadow border-2 border-dashed border-gray-300 animate-pulse">
            <div className="text-center">
              <LoadingSpinner />
              <p className="mt-4 text-gray-500 font-medium">Cocó está pensando...</p>
            </div>
          </div>
        )}

        <div ref={bottomRef} />
      </div>
    </div>
  );
};

export default App;

import React, { useState, useEffect, useRef } from 'react';
import { Panel } from './components/Panel';
import { LoadingSpinner } from './components/LoadingSpinner';
import { generateStorySegment, generatePanelImage } from './services/gemini';
import { StorySegment } from './types';

const INITIAL_PROMPT = "Inicio de la historia: Un hurón explorador llamado 'Pixel' entra con un mini chaleco de arquitecto en 'Adrihosan', una tienda de azulejos y reformas de diseño. Le fascinan los mosaicos, los renders y las texturas brillantes.";

const App: React.FC = () => {
  const [storyPanels, setStoryPanels] = useState<StorySegment[]>([]);
  const [loading, setLoading] = useState<boolean>(false);
  const [imageLoading, setImageLoading] = useState<boolean>(false);
  const [gameStarted, setGameStarted] = useState<boolean>(false);
  const bottomRef = useRef<HTMLDivElement>(null);

  const handleStart = async () => {
    setGameStarted(true);
    await advanceStory(INITIAL_PROMPT);
  };

  const advanceStory = async (userChoice: string) => {
    setLoading(true);
    try {
      // 1. Generate Text and Image Prompt
      const historyText = storyPanels.map(p => `Narrador: ${p.narrative}\nOpción elegida: ${p.selectedChoice || 'Inicio'}`).join('\n');
      const segment = await generateStorySegment(historyText, userChoice);
      
      // Add placeholder panel while image generates
      const newPanelId = Date.now();
      const partialPanel: StorySegment = {
        ...segment,
        id: newPanelId,
        imageData: null // No image yet
      };

      setStoryPanels(prev => [...prev, partialPanel]);
      setLoading(false);
      setImageLoading(true);

      // 2. Generate Image based on the prompt from step 1
      // We construct a prompt that ensures the character is consistent
      const fullImagePrompt = `Cómic, estilo dibujo animado digital vibrante. Un hurón marrón y crema llamado Pixel, con mini chaleco de arquitecto, en una tienda de azulejos (Adrihosan). ${segment.imagePrompt}`;
      
      const base64Image = await generatePanelImage(fullImagePrompt);
      
      // Update the panel with the real image
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

  // Auto-scroll to bottom when new panels arrive
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
            <h1 className="text-4xl font-bold mb-2">Pixel en Adrihosan</h1>
            <p className="text-blue-100 font-bold text-lg">Una Aventura Interactiva</p>
          </div>
          <div className="p-8 text-center">
            <div className="mb-6 text-6xl animate-bounce">🦦✨</div>
            <p className="text-lg text-gray-700 mb-6">
              Acompaña a <strong>Pixel</strong>, un hurón creativo fan de los proyectos de reformas, en su visita a la tienda de azulejos. 
              ¡Tú decides qué travesuras hará!
            </p>
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
          <h1 className="text-3xl font-bold text-blue-600">Las Aventuras de Pixel</h1>
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
              <p className="mt-4 text-gray-500 font-medium">Pixel está ideando...</p>
            </div>
          </div>
        )}
         
        {/* Invisible element to scroll to */}
        <div ref={bottomRef} />
      </div>
    </div>
  );
};

export default App;
import React from 'react';
import { StorySegment } from '../types';
import { LoadingSpinner } from './LoadingSpinner';

interface PanelProps {
  data: StorySegment;
  onChoice: (action: string) => void;
  isLast: boolean;
  disabled: boolean;
}

export const Panel: React.FC<PanelProps> = ({ data, onChoice, isLast, disabled }) => {
  return (
    <div className="bg-white rounded-xl shadow-xl overflow-hidden border-2 border-gray-200 transform transition-all duration-500 ease-in-out">
      {/* Image Area */}
      <div className="relative w-full aspect-square md:aspect-video bg-gray-100 flex items-center justify-center overflow-hidden">
        {data.imageData ? (
          <img 
            src={data.imageData} 
            alt={data.imagePrompt} 
            className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
          />
        ) : (
          <div className="flex flex-col items-center text-gray-400">
            <LoadingSpinner />
            <span className="mt-2 text-sm">Dibujando a Nube...</span>
          </div>
        )}
        
        {/* Comic Bubble for Narrative */}
        <div className="absolute bottom-4 left-4 right-4 bg-white/95 p-4 rounded-lg border-2 border-black shadow-lg">
          <p className="font-comic text-lg leading-tight text-gray-900">
            {data.narrative}
          </p>
        </div>
      </div>

      {/* Interaction Area - Only show if it's the last active panel */}
      {isLast && !data.selectedChoice && (
        <div className="p-6 bg-yellow-50 border-t-2 border-yellow-100">
          <h3 className="text-sm uppercase tracking-wider text-yellow-800 font-bold mb-4 text-center">
            ¿Qué hace Nube ahora?
          </h3>
          <div className="grid grid-cols-1 sm:grid-cols-2 gap-4">
            {data.choices.map((choice, idx) => (
              <button
                key={idx}
                onClick={() => onChoice(choice.action)}
                disabled={disabled}
                className={`
                  py-3 px-4 rounded-lg font-bold text-white shadow-md transition-all
                  ${idx === 0 ? 'bg-blue-500 hover:bg-blue-600' : 'bg-green-500 hover:bg-green-600'}
                  ${disabled ? 'opacity-50 cursor-not-allowed' : 'hover:-translate-y-1 active:translate-y-0'}
                `}
              >
                {choice.text}
              </button>
            ))}
          </div>
        </div>
      )}
    </div>
  );
};

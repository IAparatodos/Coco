import React from 'react';
import { StorySegment, CharacterId } from '../types';
import { CHARACTERS } from '../agents/characters';
import { LoadingSpinner } from './LoadingSpinner';

interface PanelProps {
  data: StorySegment;
  onChoice: (action: string) => void;
  isLast: boolean;
  disabled: boolean;
}

const COLOR_MAP: Record<string, { bg: string; border: string; text: string; badge: string }> = {
  blue:   { bg: 'bg-blue-50',   border: 'border-blue-300',   text: 'text-blue-900',   badge: 'bg-blue-500' },
  amber:  { bg: 'bg-amber-50',  border: 'border-amber-300',  text: 'text-amber-900',  badge: 'bg-amber-500' },
  green:  { bg: 'bg-green-50',  border: 'border-green-300',  text: 'text-green-900',  badge: 'bg-green-500' },
  purple: { bg: 'bg-purple-50', border: 'border-purple-300', text: 'text-purple-900', badge: 'bg-purple-500' },
  slate:  { bg: 'bg-slate-50',  border: 'border-slate-300',  text: 'text-slate-700',  badge: 'bg-slate-500' },
};

function getColors(characterId: CharacterId) {
  const character = CHARACTERS[characterId];
  return COLOR_MAP[character?.color || 'slate'] || COLOR_MAP.slate;
}

export const Panel: React.FC<PanelProps> = ({ data, onChoice, isLast, disabled }) => {
  return (
    <div className="bg-white rounded-xl shadow-xl overflow-hidden border-2 border-gray-200 transform transition-all duration-500 ease-in-out">
      {/* Image Area */}
      <div className="w-full aspect-square md:aspect-video bg-gray-100 flex items-center justify-center overflow-hidden">
        {data.imageData ? (
          <img
            src={data.imageData}
            alt={data.imagePrompt}
            className="w-full h-full object-cover hover:scale-105 transition-transform duration-700"
          />
        ) : (
          <div className="flex flex-col items-center text-gray-400">
            <LoadingSpinner />
            <span className="mt-2 text-sm">Dibujando a Cocó...</span>
          </div>
        )}
      </div>

      {/* Narrative Text Below Image */}
      <div className="px-4 py-3 border-b border-gray-100">
        <p className="font-comic text-lg leading-snug text-gray-900">
          📖 {data.narrative}
        </p>
      </div>

      {/* Character Dialogue Bubbles */}
      {data.dialogue && data.dialogue.length > 0 && (
        <div className="px-4 py-3 space-y-2">
          {data.dialogue.map((line, idx) => {
            const character = CHARACTERS[line.characterId];
            const colors = getColors(line.characterId);
            return (
              <div
                key={idx}
                className={`${colors.bg} ${colors.border} border rounded-lg p-3 flex items-start gap-3`}
              >
                <span
                  className={`${colors.badge} text-white text-xs font-bold px-2 py-1 rounded-full whitespace-nowrap flex-shrink-0`}
                >
                  {character?.emoji} {character?.name || line.characterId}
                </span>
                <p className={`${colors.text} text-sm leading-snug`}>
                  {line.text}
                </p>
              </div>
            );
          })}
        </div>
      )}

      {/* Active Characters Badge Row */}
      {data.activeCharacters && data.activeCharacters.length > 0 && (
        <div className="px-4 pb-2 flex flex-wrap gap-1">
          {data.activeCharacters
            .filter(id => id !== 'narrador')
            .map(id => {
              const character = CHARACTERS[id];
              if (!character) return null;
              return (
                <span
                  key={id}
                  className="text-xs text-gray-500 bg-gray-100 rounded-full px-2 py-0.5"
                >
                  {character.emoji} {character.name}
                </span>
              );
            })}
        </div>
      )}

      {/* Interaction Area */}
      {isLast && !data.selectedChoice && (
        <div className="p-6 bg-yellow-50 border-t-2 border-yellow-100">
          <h3 className="text-sm uppercase tracking-wider text-yellow-800 font-bold mb-4 text-center">
            ¿Qué hace Cocó ahora?
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

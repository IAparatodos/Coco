export type CharacterId = 'coco' | 'ricardo' | 'amparo' | 'gato_azulejo' | 'narrador';

export interface CharacterAgent {
  id: CharacterId;
  name: string;
  emoji: string;
  role: string;
  color: string;
  description: string;
  personality: string;
}

export interface DialogueLine {
  characterId: CharacterId;
  text: string;
}

export interface StoryChoice {
  text: string;
  action: string;
}

export interface StorySegment {
  id?: number;
  narrative: string;
  imagePrompt: string;
  choices: StoryChoice[];
  imageData: string | null;
  selectedChoice?: string;
  activeCharacters: CharacterId[];
  dialogue: DialogueLine[];
}

export enum GemModel {
  TEXT = 'gemini-2.5-flash',
  IMAGE = 'gemini-2.5-flash-image'
}

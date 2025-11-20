export interface StoryChoice {
  text: string;
  action: string;
}

export interface StorySegment {
  id?: number;
  narrative: string;
  imagePrompt: string;
  choices: StoryChoice[];
  imageData: string | null; // Base64 string of the generated image
  selectedChoice?: string;
}

export enum GemModel {
  TEXT = 'gemini-2.5-flash',
  IMAGE = 'gemini-2.5-flash-image'
}

const TELEGRAM_BOT_TOKEN = import.meta.env.VITE_TELEGRAM_BOT_TOKEN || '';
const TELEGRAM_CHAT_ID = import.meta.env.VITE_TELEGRAM_CHAT_ID || '';

const TELEGRAM_API_BASE = `https://api.telegram.org/bot${TELEGRAM_BOT_TOKEN}`;

interface TelegramEvent {
  type: 'story_start' | 'new_panel' | 'user_choice' | 'error';
  message: string;
  timestamp: string;
}

function isConfigured(): boolean {
  return Boolean(TELEGRAM_BOT_TOKEN && TELEGRAM_CHAT_ID);
}

function formatEvent(event: TelegramEvent): string {
  const icons: Record<TelegramEvent['type'], string> = {
    story_start: '🎬',
    new_panel: '📖',
    user_choice: '👆',
    error: '⚠️',
  };
  const icon = icons[event.type] || '📌';
  return `${icon} *${event.type.replace('_', ' ').toUpperCase()}*\n${event.message}\n\n🕐 ${event.timestamp}`;
}

async function sendMessage(text: string): Promise<void> {
  if (!isConfigured()) {
    console.warn('[Telegram] No configurado. Define VITE_TELEGRAM_BOT_TOKEN y VITE_TELEGRAM_CHAT_ID.');
    return;
  }

  try {
    const response = await fetch(`${TELEGRAM_API_BASE}/sendMessage`, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json' },
      body: JSON.stringify({
        chat_id: TELEGRAM_CHAT_ID,
        text,
        parse_mode: 'Markdown',
      }),
    });

    if (!response.ok) {
      const error = await response.json();
      console.error('[Telegram] Error enviando mensaje:', error);
    }
  } catch (err) {
    console.error('[Telegram] Error de red:', err);
  }
}

export function sendTelegramEvent(event: TelegramEvent): void {
  const formatted = formatEvent(event);
  sendMessage(formatted);
}

export function notifyStoryStart(): void {
  sendTelegramEvent({
    type: 'story_start',
    message: 'Nube ha empezado una nueva aventura en Adrihosan.',
    timestamp: new Date().toLocaleString('es-ES'),
  });
}

export function notifyNewPanel(narrative: string, panelNumber: number): void {
  sendTelegramEvent({
    type: 'new_panel',
    message: `Panel #${panelNumber}\n${narrative}`,
    timestamp: new Date().toLocaleString('es-ES'),
  });
}

export function notifyUserChoice(choice: string): void {
  sendTelegramEvent({
    type: 'user_choice',
    message: `El usuario eligió: "${choice}"`,
    timestamp: new Date().toLocaleString('es-ES'),
  });
}

export function notifyError(errorMsg: string): void {
  sendTelegramEvent({
    type: 'error',
    message: errorMsg,
    timestamp: new Date().toLocaleString('es-ES'),
  });
}

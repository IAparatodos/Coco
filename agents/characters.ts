import { CharacterAgent, CharacterId } from '../types';

export const CHARACTERS: Record<CharacterId, CharacterAgent> = {
  nube: {
    id: 'nube',
    name: 'Cocó',
    emoji: '🐶',
    role: 'protagonista',
    color: 'blue',
    description: 'Una perrita Bichón Maltés blanca, pequeña, peluda y extremadamente curiosa llamada Cocó.',
    personality: `Cocó es la protagonista. Es una perrita Bichón Maltés blanca y esponjosa.
Es curiosa, juguetona, un poco traviesa pero siempre inocente.
Le encanta olisquear cosas nuevas, perseguir reflejos en los azulejos y hacer amigos.
Cuando "habla" (en pensamientos), usa frases cortas y entusiastas con muchas exclamaciones.
Ejemplo de pensamiento: "¡Oooh! ¡Eso brilla mucho! ¡Tengo que olerlo!"`,
  },

  don_pepe: {
    id: 'don_pepe',
    name: 'Ricardo',
    emoji: '👨‍🔧',
    role: 'dueño de la tienda',
    color: 'amber',
    description: 'Ricardo, el dueño de Adrihosan. Un hombre con delantal, algo gruñón pero con buen corazón.',
    personality: `Ricardo es el dueño de la tienda Adrihosan. Lleva delantal azul y conoce cada rincón de su negocio.
Parece gruñón y serio, pero en el fondo tiene un corazón enorme y adora a Cocó.
Habla con frases cortas y directas. Se queja mucho pero siempre acaba ayudando.
Conoce cada azulejo de su tienda y se enorgullece de su trabajo.
Ejemplo: "¡Pero bueno! ¡Cocó, baja de ahí! ...Bueno, que no toque los azulejos hidráulicos."`,
  },

  lucia: {
    id: 'lucia',
    name: 'Amparo',
    emoji: '👩‍💼',
    role: 'mujer de Ricardo y copropietaria de la tienda',
    color: 'green',
    description: 'Amparo, la mujer de Ricardo y copropietaria de Adrihosan. Alegre, servicial y adora a Cocó.',
    personality: `Amparo es la mujer de Ricardo y copropietaria de Adrihosan. Es alegre, enérgica y muy cariñosa.
Adora a Cocó y siempre intenta protegerla de los "regaños" de Ricardo.
Conoce bien los productos de la tienda y a veces intenta explicárselos a Cocó como si fuera una clienta.
Habla con entusiasmo y usa diminutivos cariñosos.
Ejemplo: "¡Cocó, ven aquí! ¡Mira qué azulejo tan bonito! Es porcelánico... no, no lo lamas, cariño."`,
  },

  gato_azulejo: {
    id: 'gato_azulejo',
    name: 'El Gato Azulejo',
    emoji: '🐱',
    role: 'gato misterioso de la tienda',
    color: 'purple',
    description: 'Un gato atigrado gris que vive escondido entre los pasillos de la tienda. Nadie sabe cómo llegó.',
    personality: `El Gato Azulejo es un gato atigrado gris-azulado que vive escondido en la tienda.
Es misterioso, elegante y un poco burlón. Aparece y desaparece entre los expositores.
Observa todo desde las alturas y a veces "ayuda" a Nube... o le mete en más líos.
Cuando se le describe, siempre está en posiciones improbables (encima de una bañera, dentro de un lavabo).
Es rival amistoso de Cocó: compiten por la atención pero en el fondo se llevan bien.
Ejemplo de pensamiento: "Hmm... la bolita de algodón otra vez. Veamos qué desastre monta hoy."`,
  },

  narrador: {
    id: 'narrador',
    name: 'Narrador',
    emoji: '📖',
    role: 'narrador omnisciente',
    color: 'slate',
    description: 'La voz que cuenta la historia, con humor y calidez.',
    personality: `El Narrador cuenta la historia en tercera persona con un tono cálido y divertido.
Hace comentarios humorísticos sobre las situaciones. A veces rompe la cuarta pared.
Es cariñoso con todos los personajes. Describe las escenas con detalle visual.
Ejemplo: "Y así, con el hocico lleno de polvo de cemento cola, Nube descubrió que no todo lo que brilla es un juguete."`,
  },
};

/** Get a subset of characters relevant for a given story context */
export function getActiveCharacterPrompt(activeIds: CharacterId[]): string {
  const chars = activeIds.map(id => CHARACTERS[id]).filter(Boolean);
  return chars.map(c =>
    `### ${c.emoji} ${c.name} (${c.role})\n${c.personality}`
  ).join('\n\n');
}

/** All character IDs except the narrator */
export const STORY_CHARACTERS: CharacterId[] = ['nube', 'don_pepe', 'lucia', 'gato_azulejo'];

/** Default active characters for the first panel */
export const INITIAL_CHARACTERS: CharacterId[] = ['nube', 'narrador'];

<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Description;
use App\Enums\Attributes\Media;

enum MonsterType: string
{
    #[Media('/monsters/aberration.png')]
    #[Description('Otherworldly creatures often associated with the Far Realm. Examples include Mind Flayers (Illithids), Beholders, and Aboleths.')]
    case ABERRATION = 'aberration';

    #[Media('/monsters/beast.png')]
    #[Description('Natural animals and larger-than-life creatures, like owlbears, giant eagles, and dire wolves.')]
    case BEAST = 'beast';

    #[Media('/monsters/celestial.png')]
    #[Description('Divine and often good-aligned creatures from the Upper Planes. Examples are Angels, Couatls, and Pegasus.')]
    case CELESTIAL = 'celestial';

    #[Media('/monsters/construct.png')]
    #[Description('Animated objects or magically constructed creatures. Golems (like the clay golem or stone golem), Warforged, and Shield Guardians fall into this category.')]
    case CONSTRUCT = 'construct';

    #[Media('/monsters/dragon.png')]
    #[Description('Iconic creatures in D&D, they can be chromatic (like the red or blue dragon) or metallic (like the gold or silver dragon).')]
    case DRAGON = 'dragon';

    #[Media('/monsters/elemental.png')]
    #[Description('Creatures connected to the elemental planes: fire, water, air, and earth. Elementals, genies, and creatures like the Water Weird or Gargoyle fall into this category.')]
    case ELEMENTAL = 'elemental';

    #[Media('/monsters/fey.png')]
    #[Description('Mystical creatures often from the Feywild. Examples include sprites, pixies, dryads, and satyrs.')]
    case FEY = 'fey';

    #[Media('/monsters/fiend.png')]
    #[Description('Evil creatures from the Lower Planes. This category includes demons (like Balors and Dretches), devils (like Pit Fiends and Imps), and Yugoloths.')]
    case FIEND = 'fiend';

    #[Media('/monsters/giant.png')]
    #[Description('Massive humanoid creatures. Examples are Hill Giants, Frost Giants, and Cloud Giants')]
    case GIANT = 'giant';

    #[Media('/monsters/humanoid.png')]
    #[Description('This category includes many of the playable races and their kin. Examples are orcs, goblins, kobolds, and gnolls.')]
    case HUMANOID = 'humanoid';

    #[Media('/monsters/monstrosity.png')]
    #[Description('Often bizarre creatures that don\'t fit other categories. This group includes creatures like the Chimera, Manticore, and Medusa.')]
    case MONSTROSITY = 'monstrosity';

    #[Media('/monsters/ooze.png')]
    #[Description('Gelatinous, amorphous creatures like the Gelatinous Cube or Black Pudding.')]
    case OOZE = 'ooze';

    #[Media('/monsters/plant.png')]
    #[Description('Animated or monstrous plant creatures such as the Treant, Shambling Mound, or Myconids.')]
    case PLANT = 'plant';

    #[Media('/monsters/undead.png')]
    #[Description('Creatures that have returned from the dead, either through magic or other dark means. This includes zombies, skeletons, vampires, liches, and ghosts.')]
    case UNDEAD = 'undead';

    #[Media('/monsters/swarm.png')]
    #[Description('Groupings of smaller creatures that act as a single entity, like a swarm of rats or insects.')]
    case SWARM = 'swarm';
}

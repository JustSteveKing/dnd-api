<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Common;
use App\Enums\Attributes\Description;
use App\Enums\Attributes\Expanded;
use App\Enums\Attributes\Uncommon;

enum CharacterRace: string
{
    #[Common]
    #[Description('Versatile and adaptable, humans are often seen as the "standard" race, with a broad range of capabilities and diverse cultures.')]
    case HUMAN = 'human';

    #[Common]
    #[Description('Graceful and long-lived, elves often have a strong affinity for magic and nature. Subraces might include High Elves, Wood Elves, Dark Elves (or Drow), and more.')]
    case ELF = 'elf';

    #[Common]
    #[Description('Stout and sturdy, dwarves are known for their craftsmanship, love for ale and gems, and living in mountainous strongholds.')]
    case DWARF = 'dwarf';

    #[Common]
    #[Description('Small and nimble, halflings are often seen as lucky, with a penchant for stealth and a love for comfort. They\'re similar to Tolkien\'s Hobbits.')]
    case HALFLING = 'halfling';

    #[Common]
    #[Description('Tiny, curious, and often enchanted, gnomes are tinkerers or magic-users, with subraces like Forest Gnomes and Rock Gnomes.')]
    case GNOME = 'gnome';

    #[Uncommon]
    #[Description('Humanoids with dragon ancestry, they often have breath weapons and a strong sense of honor.')]
    case DRAGONBORN = 'dragonborn';

    #[Uncommon]
    #[Description('Individuals with infernal heritage, often manifesting as horns, tails, and a natural inclination for fire magic.')]
    case TIEFLING = 'tiefling';

    #[Uncommon]
    #[Description('The celestial counterpart to tieflings, these beings have a divine lineage and often manifest radiant abilities.')]
    case AAISMAR = 'aaismar';

    #[Uncommon]
    #[Description('Cat-like humanoids known for their agility and curiosity.')]
    case TABAXI = 'tabaxi';

    #[Uncommon]
    #[Description('Aquatic humanoids from the depths of the oceans, with abilities related to water and sea life.')]
    case TRITON = 'triton';

    #[Uncommon]
    #[Description('Giant-kin connected to the forest and nature, often seen as gentle and reclusive druidic beings.')]
    case FIRBOLG = 'firbolg';

    #[Uncommon]
    #[Description('Raven-like humanoids, often with a knack for mimicry but cursed to lack originality.')]
    case KENKU = 'kenku';

    #[Uncommon]
    #[Description('Reptilian humanoids, often seen as primitive but with a strong connection to swamps and water.')]
    case LIZARDFOLK = 'lizardfolk';

    #[Uncommon]
    #[Description('Bird-like humanoids capable of flight.')]
    case AARAKOCRA = 'aarakocra';

    #[Uncommon]
    #[Description('Beings touched by elemental planes, they can manifest traits of fire, air, water, or earth.')]
    case GENASI = 'genasi';

    #[Expanded]
    #[Description('Living constructs, often resembling humanoid armor or statues, created for war but seeking purpose.')]
    case WARFORGED = 'warforged';

    #[Expanded]
    #[Description('Shape-shifters who can take on the appearance of other humanoids.')]
    case CHANGELING = 'changeling';

    #[Expanded]
    #[Description('Psychic humanoids bonded with spirits from the dream realm.')]
    case KALASHTAR = 'kalashtar';

    #[Expanded]
    #[Description('Mantis-like humanoids known for multiple arms and a nomadic lifestyle.')]
    case THRI_KREEN = 'Thri-kreen';

    #[Expanded]
    #[Description('Bull-headed humanoids known for strength and a connection to labyrinths.')]
    case MINOTAUR = 'Minotaur';

    #[Expanded]
    #[Description('Snake-like humanoids with various degrees of serpent traits, often associated with forbidden magic.')]
    case YUAN_TI = 'Yuan-ti';
}

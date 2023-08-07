<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Common;
use App\Enums\Attributes\Description;
use App\Enums\Attributes\Expanded;
use App\Enums\Attributes\Media;
use App\Enums\Attributes\Uncommon;

enum CharacterRace: string
{
    #[Common]
    #[Media('/race/human.png')]
    #[Description('Versatile and adaptable, humans are often seen as the "standard" race, with a broad range of capabilities and diverse cultures.')]
    case HUMAN = 'human';

    #[Common]
    #[Media('/race/elf.png')]
    #[Description('Graceful and long-lived, elves often have a strong affinity for magic and nature. Subraces might include High Elves, Wood Elves, Dark Elves (or Drow), and more.')]
    case ELF = 'elf';

    #[Common]
    #[Media('/race/dwarf.png')]
    #[Description('Stout and sturdy, dwarves are known for their craftsmanship, love for ale and gems, and living in mountainous strongholds.')]
    case DWARF = 'dwarf';

    #[Common]
    #[Media('/race/halfling.png')]
    #[Description('Small and nimble, halflings are often seen as lucky, with a penchant for stealth and a love for comfort. They\'re similar to Tolkien\'s Hobbits.')]
    case HALFLING = 'halfling';

    #[Common]
    #[Media('/race/gnome.png')]
    #[Description('Tiny, curious, and often enchanted, gnomes are tinkerers or magic-users, with subraces like Forest Gnomes and Rock Gnomes.')]
    case GNOME = 'gnome';

    #[Uncommon]
    #[Media('/race/dragonborn.png')]
    #[Description('Humanoids with dragon ancestry, they often have breath weapons and a strong sense of honor.')]
    case DRAGONBORN = 'dragonborn';

    #[Uncommon]
    #[Media('/race/tiefling.png')]
    #[Description('Individuals with infernal heritage, often manifesting as horns, tails, and a natural inclination for fire magic.')]
    case TIEFLING = 'tiefling';

    #[Uncommon]
    #[Media('/race/aaismar.png')]
    #[Description('The celestial counterpart to tieflings, these beings have a divine lineage and often manifest radiant abilities.')]
    case AAISMAR = 'aaismar';

    #[Uncommon]
    #[Media('/race/tabaxi.png')]
    #[Description('Cat-like humanoids known for their agility and curiosity.')]
    case TABAXI = 'tabaxi';

    #[Uncommon]
    #[Media('/race/triton.png')]
    #[Description('Aquatic humanoids from the depths of the oceans, with abilities related to water and sea life.')]
    case TRITON = 'triton';

    #[Uncommon]
    #[Media('/race/firbolg.png')]
    #[Description('Giant-kin connected to the forest and nature, often seen as gentle and reclusive druidic beings.')]
    case FIRBOLG = 'firbolg';

    #[Uncommon]
    #[Media('/race/kenku.png')]
    #[Description('Raven-like humanoids, often with a knack for mimicry but cursed to lack originality.')]
    case KENKU = 'kenku';

    #[Uncommon]
    #[Media('/race/lizardfolk.png')]
    #[Description('Reptilian humanoids, often seen as primitive but with a strong connection to swamps and water.')]
    case LIZARDFOLK = 'lizardfolk';

    #[Uncommon]
    #[Media('/race/aarakocra.png')]
    #[Description('Bird-like humanoids capable of flight.')]
    case AARAKOCRA = 'aarakocra';

    #[Uncommon]
    #[Media('/race/genasi.png')]
    #[Description('Beings touched by elemental planes, they can manifest traits of fire, air, water, or earth.')]
    case GENASI = 'genasi';

    #[Expanded]
    #[Media('/race/warforged.png')]
    #[Description('Living constructs, often resembling humanoid armor or statues, created for war but seeking purpose.')]
    case WARFORGED = 'warforged';

    #[Expanded]
    #[Media('/race/changeling.png')]
    #[Description('Shape-shifters who can take on the appearance of other humanoids.')]
    case CHANGELING = 'changeling';

    #[Expanded]
    #[Media('/race/kalashtar.png')]
    #[Description('Psychic humanoids bonded with spirits from the dream realm.')]
    case KALASHTAR = 'kalashtar';

    #[Expanded]
    #[Media('race/thri-kreen.png')]
    #[Description('Mantis-like humanoids known for multiple arms and a nomadic lifestyle.')]
    case THRI_KREEN = 'Thri-kreen';

    #[Expanded]
    #[Media('/race/minotaur.png')]
    #[Description('Bull-headed humanoids known for strength and a connection to labyrinths.')]
    case MINOTAUR = 'Minotaur';

    #[Expanded]
    #[Media('race/yuan-ti.png')]
    #[Description('Snake-like humanoids with various degrees of serpent traits, often associated with forbidden magic.')]
    case YUAN_TI = 'Yuan-ti';
}

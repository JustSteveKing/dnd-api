<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Description;
use App\Enums\Attributes\Exotic;
use App\Enums\Attributes\Facility;
use App\Enums\Attributes\Natural;
use App\Enums\Attributes\Planar;
use App\Enums\Attributes\Urban;

enum LocationType: string
{
    #[Natural]
    #[Description('Ranging from light woods to impenetrable, dark, and enchanted forests.')]
    case FOREST = 'forest';

    #[Natural]
    #[Description(' Snow-capped peaks, dangerous passes, or dwarven strongholds within.')]
    case MOUNTAIN = 'mountain';

    #[Natural]
    #[Description('Natural or creature-made, hiding secrets or dangers.')]
    case CAVE = 'cave';

    #[Natural]
    #[Description('Sandy expanses, dunes, or rocky plateaus with hidden oases.')]
    case DESERT = 'desert';

    #[Natural]
    #[Description('Difficult terrain, home to creatures and ancient mysteries.')]
    case SWAMP = 'swamp';

    #[Natural]
    #[Description('From tropical paradises to barren, monster-infested rocks.')]
    case ISLAND = 'island';

    #[Natural]
    #[Description('Open expanses, which can be calm or home to nomadic tribes.')]
    case PLAIN = 'plain';

    #[Natural]
    #[Description('Spanning from coastal regions to the deep blue, with underwater civilizations or shipwrecks.')]
    case SEA = 'sea';

    #[Urban]
    #[Description('Small, often rural, communities.')]
    case VILLAGE = 'village';

    #[Urban]
    #[Description('Larger than villages, with more amenities and politics.')]
    case TOWN = 'town';

    #[Urban]
    #[Description('Centers of commerce, politics, and culture; they can range from shining capitals to crime-ridden underbellies.')]
    case CITY = 'city';

    #[Urban]
    #[Description('Fortified structures, homes to nobility or important figures.')]
    case CASTLE = 'castle';

    #[Urban]
    #[Description('Fortified structures, homes to nobility or important figures.')]
    case KEEP = 'keep';

    #[Urban]
    #[Description('Places of worship, divine power, or secluded study.')]
    case TEMPLE = 'temple';

    #[Urban]
    #[Description('Places of worship, divine power, or secluded study.')]
    case MONASTERY = 'monastery';

    #[Urban]
    #[Description('Centers of knowledge, magic study, or forbidden lore.')]
    case UNIVERSITY = 'university';

    #[Urban]
    #[Description('Centers of knowledge, magic study, or forbidden lore.')]
    case LIBRARY = 'library';

    #[Urban]
    #[Description('Places for sport, combat, and entertainment.')]
    case ARENA = 'arena';

    #[Exotic]
    #[Description('Once-great places, now fallen to time or catastrophe.')]
    case RUIN = 'ruin';

    #[Exotic]
    #[Description('Once-great places, now fallen to time or catastrophe.')]
    case LOST_CITY = 'lost city';

    #[Exotic]
    #[Description('Nature-imbued places of magic or druidic rituals.')]
    case MYSTIC_GROVE = 'mystic grove';

    #[Exotic]
    #[Description('Entrances to other dimensions or realities.')]
    case PLANR_GATEWAY = 'planar gateway';

    #[Exotic]
    #[Description('A vast, dark world below the surface, home to unique and often dangerous civilizations.')]
    case UNDERDARK = 'underdark';

    #[Exotic]
    #[Description('Lands that defy gravity, possibly with their own ecosystems.')]
    case FLOATING_ISLAND = 'floating island';

    #[Exotic]
    #[Description('Areas altered or defined by raw magical energy.')]
    case MAGIC_INFUSED_LANDSCAPE = 'magic infused landscape';

    #[Exotic]
    #[Description('Resting places of the dead, often guarded or cursed.')]
    case ANCIENT_TOMB = 'ancient tomb';

    #[Exotic]
    #[Description('Resting places of the dead, often guarded or cursed.')]
    case CRYPT = 'crypt';

    #[Planar]
    #[Description('Paradises, homes to gods or angelic beings.')]
    case CELESTIAL_REALM = 'celestial realm';

    #[Planar]
    #[Description('Realms of torment, fire, and demons.')]
    case INFERNAL_PLANE = 'infernal plane';

    #[Planar]
    #[Description('Realms dominated by elements – Fire, Water, Air, Earth, and others.')]
    case ELEMENTAL_REALM = 'elemental realm';

    #[Planar]
    #[Description('Ghostly dimensions overlapping the mortal world.')]
    case SHADOW_REALM = 'shadow realm';

    #[Planar]
    #[Description('Places that defy natural laws, possibly driven by madness.')]
    case ELDRITCH_REALM = 'eldritch realm';

    #[Facility]
    #[Description('Dug for resources but often fraught with danger.')]
    case MINE = 'mine';

    #[Facility]
    #[Description('Holding criminals, monsters, or secrets.')]
    case PRISON = 'prison';

    #[Facility]
    #[Description('Holding criminals, monsters, or secrets.')]
    case DUNGEON = 'dungeon';

    #[Facility]
    #[Description('Places of experimentation, magic or technological research.')]
    case LABORATORY = 'laboratory';

    #[Facility]
    #[Description('Producing goods, possibly using dark magic or enslaved labor.')]
    case FACTORY = 'factory';
}

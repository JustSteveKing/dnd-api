<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Description;
use App\Enums\Attributes\Exotic;
use App\Enums\Attributes\Facility;
use App\Enums\Attributes\Media;
use App\Enums\Attributes\Natural;
use App\Enums\Attributes\Planar;
use App\Enums\Attributes\Urban;
use App\Enums\Concerns\GetAttributes;

enum LocationType: string
{
    use GetAttributes;

    #[Natural]
    #[Media('/locations/forest.png')]
    #[Description('Ranging from light woods to impenetrable, dark, and enchanted forests.')]
    case FOREST = 'forest';

    #[Natural]
    #[Media('/locations/mountain.png')]
    #[Description('Snow-capped peaks, dangerous passes, or dwarven strongholds within.')]
    case MOUNTAIN = 'mountain';

    #[Natural]
    #[Media('/locations/cave.png')]
    #[Description('Natural or creature-made, hiding secrets or dangers.')]
    case CAVE = 'cave';

    #[Natural]
    #[Media('/locations/desert.png')]
    #[Description('Sandy expanses, dunes, or rocky plateaus with hidden oases.')]
    case DESERT = 'desert';

    #[Natural]
    #[Media('/locations/swamp.png')]
    #[Description('Difficult terrain, home to creatures and ancient mysteries.')]
    case SWAMP = 'swamp';

    #[Natural]
    #[Media('/locations/island.png')]
    #[Description('From tropical paradises to barren, monster-infested rocks.')]
    case ISLAND = 'island';

    #[Natural]
    #[Media('/locations/plain.png')]
    #[Description('Open expanses, which can be calm or home to nomadic tribes.')]
    case PLAIN = 'plain';

    #[Natural]
    #[Media('/locations/sea.png')]
    #[Description('Spanning from coastal regions to the deep blue, with underwater civilizations or shipwrecks.')]
    case SEA = 'sea';

    #[Urban]
    #[Media('/locations/village.png')]
    #[Description('Small, often rural, communities.')]
    case VILLAGE = 'village';

    #[Urban]
    #[Media('/locations/town.png')]
    #[Description('Larger than villages, with more amenities and politics.')]
    case TOWN = 'town';

    #[Urban]
    #[Media('/locations/city.png')]
    #[Description('Centers of commerce, politics, and culture; they can range from shining capitals to crime-ridden underbellies.')]
    case CITY = 'city';

    #[Urban]
    #[Media('/locations/castle.png')]
    #[Description('Fortified structures, homes to nobility or important figures.')]
    case CASTLE = 'castle';

    #[Urban]
    #[Media('/locations/keep.png')]
    #[Description('Fortified structures, homes to nobility or important figures.')]
    case KEEP = 'keep';

    #[Urban]
    #[Media('/locations/temple.png')]
    #[Description('Places of worship, divine power, or secluded study.')]
    case TEMPLE = 'temple';

    #[Urban]
    #[Media('/locations/monastery.png')]
    #[Description('Places of worship, divine power, or secluded study.')]
    case MONASTERY = 'monastery';

    #[Urban]
    #[Media('/locations/university.png')]
    #[Description('Centers of knowledge, magic study, or forbidden lore.')]
    case UNIVERSITY = 'university';

    #[Urban]
    #[Media('/locations/library.png')]
    #[Description('Centers of knowledge, magic study, or forbidden lore.')]
    case LIBRARY = 'library';

    #[Urban]
    #[Media('/locations/arena.png')]
    #[Description('Places for sport, combat, and entertainment.')]
    case ARENA = 'arena';

    #[Exotic]
    #[Media('/locations/ruin.png')]
    #[Description('Once-great places, now fallen to time or catastrophe.')]
    case RUIN = 'ruin';

    #[Exotic]
    #[Media('/locations/lost-city.png')]
    #[Description('Once-great places, now fallen to time or catastrophe.')]
    case LOST_CITY = 'lost city';

    #[Exotic]
    #[Media('/locations/mystic-grove.png')]
    #[Description('Nature-imbued places of magic or druidic rituals.')]
    case MYSTIC_GROVE = 'mystic grove';

    #[Exotic]
    #[Media('/locations/planar-gateway.png')]
    #[Description('Entrances to other dimensions or realities.')]
    case PLANAR_GATEWAY = 'planar gateway';

    #[Exotic]
    #[Media('/locations/underdark.png')]
    #[Description('A vast, dark world below the surface, home to unique and often dangerous civilizations.')]
    case UNDERDARK = 'underdark';

    #[Exotic]
    #[Media('/locations/floating-island.png')]
    #[Description('Lands that defy gravity, possibly with their own ecosystems.')]
    case FLOATING_ISLAND = 'floating island';

    #[Exotic]
    #[Media('/locations/magic-infused-landscape.png')]
    #[Description('Areas altered or defined by raw magical energy.')]
    case MAGIC_INFUSED_LANDSCAPE = 'magic infused landscape';

    #[Exotic]
    #[Media('/locations/ancient-tomb.png')]
    #[Description('Resting places of the dead, often guarded or cursed.')]
    case ANCIENT_TOMB = 'ancient tomb';

    #[Exotic]
    #[Media('/locations/crypt.png')]
    #[Description('Resting places of the dead, often guarded or cursed.')]
    case CRYPT = 'crypt';

    #[Planar]
    #[Media('/locations/celestial-realm.png')]
    #[Description('Paradises, homes to gods or angelic beings.')]
    case CELESTIAL_REALM = 'celestial realm';

    #[Planar]
    #[Media('/locations/infernal-plane.png')]
    #[Description('Realms of torment, fire, and demons.')]
    case INFERNAL_PLANE = 'infernal plane';

    #[Planar]
    #[Media('/locations/elemental-realm.png')]
    #[Description('Realms dominated by elements – Fire, Water, Air, Earth, and others.')]
    case ELEMENTAL_REALM = 'elemental realm';

    #[Planar]
    #[Media('/locations/shadow-realm.png')]
    #[Description('Ghostly dimensions overlapping the mortal world.')]
    case SHADOW_REALM = 'shadow realm';

    #[Planar]
    #[Media('/locations/eldritch-realm.png')]
    #[Description('Places that defy natural laws, possibly driven by madness.')]
    case ELDRITCH_REALM = 'eldritch realm';

    #[Facility]
    #[Media('/locations/mine.png')]
    #[Description('Dug for resources but often fraught with danger.')]
    case MINE = 'mine';

    #[Facility]
    #[Media('/locations/prison.png')]
    #[Description('Holding criminals, monsters, or secrets.')]
    case PRISON = 'prison';

    #[Facility]
    #[Media('/locations/dungeon.png')]
    #[Description('Holding criminals, monsters, or secrets.')]
    case DUNGEON = 'dungeon';

    #[Facility]
    #[Media('/locations/laboratory.png')]
    #[Description('Places of experimentation, magic or technological research.')]
    case LABORATORY = 'laboratory';

    #[Facility]
    #[Media('/locations/factory.png')]
    #[Description('Producing goods, possibly using dark magic or enslaved labor.')]
    case FACTORY = 'factory';
}

<?php

declare(strict_types=1);

namespace App\Enums;

use App\Enums\Attributes\Description;
use App\Enums\Attributes\Hybrid;
use App\Enums\Attributes\Magic;
use App\Enums\Attributes\Rogue;
use App\Enums\Attributes\Warrior;

enum CharacterClass: string
{
    #[Warrior]
    #[Description('Versatile warriors skilled in combat and the use of armor and weapons. They can specialize in various fighting styles.')]
    case FIGHTER = 'fighter';

    #[Warrior]
    #[Description('Fierce warriors known for their rage and physical prowess. They often come from primitive backgrounds and can resist damage and deal immense physical harm.')]
    case BARBARIAN = 'barbarian';

    #[Warrior]
    #[Description('Holy warriors endowed with divine powers. They often follow a strict code and can heal as well as smite their enemies.')]
    case PALADIN = 'paladin';

    #[Warrior]
    #[Description('Wilderness warriors skilled in tracking, archery, and nature magic. They often have animal companions.')]
    case RANGER = 'ranger';

    #[Magic]
    #[Description('Users of arcane magic, often learned from ancient tomes and long study. They have a wide variety of spells but might need to prepare them in advance.')]
    case WIZARD = 'wizard';

    #[Magic]
    #[Description('Innate spellcasters whose power comes from their bloodline or a mystical source. Unlike wizards, they don\'t need to prepare spells but have a more limited selection.')]
    case SORCERER = 'sorcerer';

    #[Magic]
    #[Description('Spellcasters who derive their power from a pact with a powerful entity, like a demon, fey, or eldritch being. They have unique magical abilities called invocations.')]
    case WARLOCK = 'warlock';

    #[Magic]
    #[Description('Priests and holy warriors who gain powers from deities. They can both heal and deal damage, often using divine spells.')]
    case CLERIC = 'cleric';

    #[Rogue]
    #[Description('Skilled in stealth, cunning, and dexterity. They excel at tasks like picking locks, disarming traps, and backstabbing enemies.')]
    case ROGUE = 'rogue';

    #[Rogue]
    #[Description('Musical magic users who can inspire allies, manipulate minds, and have a wide range of both arcane and supportive spells.')]
    case BARD = 'bard';

    #[Rogue]
    #[Description('Martial artists with unique abilities like stunning strikes, enhanced speed, and sometimes mystical powers.')]
    case MONK = 'monk';

    #[Hybrid]
    #[Description('Magic users connected to nature. They can shape-shift into animals and harness the powers of the natural world.')]
    case DRUID = 'druid';

    #[Hybrid]
    #[Description('Inventors and creators of magical gadgets and artifacts. They can imbue objects with arcane power.')]
    case ARTIFICER = 'artificer';

    #[Hybrid]
    #[Description('Individuals with psychic abilities, using mental power to achieve effects that might resemble magic.')]
    case MYSTIC = 'mystic';

    #[Hybrid]
    #[Description('Individuals with psychic abilities, using mental power to achieve effects that might resemble magic.')]
    case PSION = 'psion';

    #[Hybrid]
    #[Description('Warriors who use blood magic and dark rituals to enhance their combat abilities and hunt their enemies.')]
    case BLOOD_HUNTER = 'blood hunter';

    #[Hybrid]
    #[Description('Experts in ranged combat using firearms, often found in more modern or steampunk settings.')]
    case GUN_SLINGER = 'gun slinger';

    #[Hybrid]
    #[Description('Individuals skilled in creating potent mixtures, from explosive bombs to transformative elixirs.')]
    case ALCHEMIST = 'alchemist';

    #[Hybrid]
    #[Description('Magic users who specialize in calling creatures or entities to assist in battle.')]
    case SUMMONER = 'summoner';

    #[Hybrid]
    #[Description(' Spellcasters who specialize in the magic of death, able to raise and control the undead.')]
    case NECROMANCER = 'necromancer';
}

<?php

declare(strict_types=1);

namespace App\DataObjects;

final readonly class Stats
{
    /**
     * @param int $health Health or life points. When it reaches zero, the character is incapacitated or dead.
     * @param int $speed Dictates how far a character can move in a single action or turn
     * @param int $strength Measures physical power and affects how much a character can carry, melee damage, and certain physical tasks.
     * @param int $dexterity Represents agility, reflexes, and balance. Influences ranged attacks, defense, and tasks that require finesse.
     * @param int $constitution Dictates health and stamina. It affects hit points, resistance to fatigue, and resilience against ailments.
     * @param int $intelligence Measures mental acuity and memory. Influences magical abilities, knowledge-based skills, and problem-solving.
     * @param int $wisdom Represents intuition and perception. Affects insight, perception checks, and certain magical abilities.
     * @param int $charisma Measures force of personality, persuasiveness, and leadership. Affects interactions with others and certain magical abilities.
     * @param int $mana Fuel for using magical abilities.
     */
    public function __construct(
        public int $health,
        public int $speed,
        public int $strength,
        public int $dexterity,
        public int $constitution,
        public int $intelligence,
        public int $wisdom,
        public int $charisma,
        public int $mana,
    ) {
    }

    /**
     * @param array{health:int,speed:int,strength:int,dexterity:int,constitution:int,intelligence:int,wisdom:int,charisma:int,mana:int} $data
     * @return Stats
     */
    public static function fromArray(array $data): Stats
    {
        return new Stats(
            health: $data['health'],
            speed: $data['speed'],
            strength: $data['strength'],
            dexterity: $data['dexterity'],
            constitution: $data['constitution'],
            intelligence: $data['intelligence'],
            wisdom: $data['wisdom'],
            charisma: $data['charisma'],
            mana: $data['mana'],
        );
    }

    public static function default(): Stats
    {
        return new Stats(
            health: 1,
            speed: 1,
            strength: 1,
            dexterity: 1,
            constitution: 1,
            intelligence: 1,
            wisdom: 1,
            charisma: 1,
            mana: 1,
        );
    }

    /**
     * @return array{health:int,speed:int,strength:int,dexterity:int,constitution:int,intelligence:int,wisdom:int,charisma:int,mana:int}
     */
    public function toArray(): array
    {
        return [
            'health' => $this->health,
            'speed' => $this->speed,
            'strength' => $this->strength,
            'dexterity' => $this->dexterity,
            'constitution' => $this->constitution,
            'intelligence' => $this->intelligence,
            'wisdom' => $this->wisdom,
            'charisma' => $this->charisma,
            'mana' => $this->mana,
        ];
    }
}

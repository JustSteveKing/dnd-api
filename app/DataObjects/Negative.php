<?php

declare(strict_types=1);

namespace App\DataObjects;

final readonly class Negative
{
    /**
     * @param string $name
     * @param int $points
     */
    public function __construct(
        public string $name,
        public int $points,
    ) {
    }

    /**
     * @param array{name:string,points:int} $data
     * @return Negative
     */
    public static function fromArray(array $data): Negative
    {
        return new Negative(
            name: $data['name'],
            points: $data['points'],
        );
    }

    /**
     * @return array{name:string,points:int}
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'points' => $this->points,
        ];
    }
}

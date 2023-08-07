<?php

declare(strict_types=1);

namespace App\DataObjects;

final readonly class Positive
{
    /**
     * @param string $name
     * @param int $points
     */
    public function __construct(
        public string $name,
        public int $points,
    ) {}

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

    /**
     * @param array{name:string,points:int} $data
     * @return Positive
     */
    public static function fromArray(array $data): Positive
    {
        return new Positive(
            name: $data['name'],
            points: $data['points'],
        );
    }
}

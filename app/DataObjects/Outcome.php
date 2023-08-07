<?php

declare(strict_types=1);

namespace App\DataObjects;

final readonly  class Outcome
{
    /**
     * @param Positive $positive
     * @param Negative $negative
     */
    public function __construct(
        public Positive $positive,
        public Negative $negative,
    ) {}

    /**
     * @return array{positive:array{name:string,points:int},negative:array{name:string,points:int}}
     */
    public function toArray(): array
    {
        return [
            'positive' => $this->positive->toArray(),
            'negative' => $this->negative->toArray(),
        ];
    }

    /**
     * @param array{positive:array{name:string,points:int},negative:array{name:string,points:int}} $data
     * @return Outcome
     */
    public static function fromArray(array $data): Outcome
    {
        return new Outcome(
            positive: Positive::fromArray(
                data: $data['positive'],
            ),
            negative: Negative::fromArray(
                data: $data['negative'],
            ),
        );
    }
}

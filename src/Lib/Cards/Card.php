<?php

namespace Composite\Lib\Cards;

class Card
{
    private function __construct(
        private string $title,
        private string $description,
    ){ }

    public static function fromArray(array $cardData): Card
    {
        return new Card($cardData['title'], $cardData['description']);
    }

    public function title(): string
    {
        return $this->title;
    }

    public function description(): string
    {
        return $this->description;
    }
}

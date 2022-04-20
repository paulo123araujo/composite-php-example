<?php

namespace Composite\Lib\Cards;

use Composite\Lib\Cards\{Card, CardContract};

use Exception;

class CardComposite implements CardContract
{
    /** @var CardContract[] $platform */
    private array $platforms = [];

    public function moveCard(Card $card): void
    {
        foreach ($this->platforms as $platform) {
            $platform->moveCard($card);
        }
    }

    public function addPlatform(CardContract $platform): void
    {
        if ($this->canUserInteractWithPlatform() === false) {
            throw new Exception('You shall not pass');
        }

        $this->platforms[] = $platform;
    }

    private function canUserInteractWithPlatform(): bool
    {
        return true; //Auth::user()->roles()->isAdmin();
    }
}

<?php

namespace Composite\Lib\Cards;

interface CardContract
{
    public function moveCard(Card $card): void;
}

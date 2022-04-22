<?php

namespace Composite\Lib\Platforms;

use Composite\Lib\Cards\{Card, CardContract};

class TrelloPlatform implements CardContract
{
  public function moveCard(Card $card): void
  {
    $msg = sprintf("Movendo card no Trello -> %s", $card->title());
    echo $msg . PHP_EOL;
  }
}

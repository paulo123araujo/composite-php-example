<?php

namespace Composite\Lib\Platforms;

use Composite\Lib\Cards\{Card, CardContract};
use Composite\Lib\MergeRequests\{MergeRequest, MergeRequestContract};

class GitlabPlatform implements MergeRequestContract, CardContract
{
    public function createMergeRequest(MergeRequest $mergeRequest): void
    {
        $msg = sprintf("Criando merge request no Gitlab -> %s", $mergeRequest->link());
        echo $msg . PHP_EOL;
    }

    public function moveCard(Card $card): void
    {
        $msg = sprintf("Movendo card no Gitlab -> %s", $card->title());
        echo $msg . PHP_EOL;
    }
}

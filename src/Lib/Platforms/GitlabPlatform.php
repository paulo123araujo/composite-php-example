<?php

namespace Composite\Lib\Platforms;

use Composite\Lib\Cards\{Card, CardContract};
use Composite\Lib\MergeRequests\{MergeRequest, MergeRequestContract};

class GitlabPlatform implements MergeRequestContract, CardContract
{
    public function createMergeRequest(MergeRequest $mergeRequest): void
    {
        // envia para o gitlab
    }

    public function moveCard(Card $card): void
    {
        // move card no gitlab
    }
}

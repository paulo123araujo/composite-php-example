<?php

namespace Composite\Lib\MergeRequests;

interface MergeRequestContract
{
    public function createMergeRequest(MergeRequest $mergeRequest): void;
}

<?php

namespace Composite\Lib\MergeRequests;

class MergeRequest
{
    private function __construct(
        private string $link,
        private bool $isApproved = false,
        private bool $isMerged = false
    ){ }

    public static function fromArray(array $mrData): MergeRequest
    {
        return new MergeRequest(
            $mrData['link'],
            $mrData['approved'],
            $mrData['merged']
        );
    }

    public function link(): string
    {
        return $this->link;
    }

    public function isApproved(): bool
    {
        return $this->isApproved;
    }

    public function isMerged(): bool
    {
        return $this->isMerged;
    }
}

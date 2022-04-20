<?php

namespace Composite\Lib\MergeRequests;

class MergeRequestComposite implements MergeRequestContract
{
    /** @var MergeRequestContract[] $platform */
    private array $platforms = [];

    public function createMergeRequest(MergeRequest $mergeRequest): void
    {
        foreach ($this->platforms as $platform) {
            $platform->createMergeRequest($mergeRequest);
        }
    }

    public function addPlatform(MergeRequestContract $platform): void
    {
        if ($this->canUserInteractWithPlatform() === false) {
            throw new \Exception('You shall not pass');
        }

        $this->platforms[] = $platform;
    }

    private function canUserInteractWithPlatform(): bool
    {
        return true; // Auth::user()->roles()->isAdmin();
    }
}

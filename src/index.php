<?php

use Composite\CardComposite;
use Composite\Lib\MergeRequests\MergeRequestComposite;
use Composite\Lib\Platforms\GitlabPlatform;
use Composite\Lib\Platforms\TrelloPlatform;

require_once __DIR__ . '/../vendor/autoload.php';

$gitlabPlatform = new GitlabPlatform();
$trelloPlatform = new TrelloPlatform();

$compositeCard = new CardComposite();

$compositeCard->addPlatform($trelloPlatform);
$compositeCard->addPlatform($compositeMRPlatform);


$compositeMergeRequest = new MergeRequestComposite();

$compositeMergeRequest->addPlatform($gitlabPlatform);

// recebo a ação de mover card

$compositeCard->moveCard($card);

// recebo a ação de criar mr

$compositeMergeRequest->createMergeRequest($mergeRequest);

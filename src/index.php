<?php

use Composite\Lib\Cards\Card;
use Composite\Lib\Cards\CardComposite;
use Composite\Lib\MergeRequests\MergeRequest;
use Composite\Lib\MergeRequests\MergeRequestComposite;
use Composite\Lib\Platforms\GitlabPlatform;
use Composite\Lib\Platforms\TrelloPlatform;

require_once __DIR__ . '/../vendor/autoload.php';

$gitlabPlatform = new GitlabPlatform();
$trelloPlatform = new TrelloPlatform();

$compositeCard = new CardComposite();

$compositeCard->addPlatform($trelloPlatform);
$compositeCard->addPlatform($gitlabPlatform);


$compositeMergeRequest = new MergeRequestComposite();

$compositeMergeRequest->addPlatform($gitlabPlatform);

// recebo a ação de mover card
$card = Card::fromArray([ // dados por exemplo recuperados do banco de dados
    'title' => 'do this',
    'description' => 'with that',
]);

$compositeCard->moveCard($card);

// recebo a ação de criar mr

$mergeRequest = MergeRequest::fromArray([ // dados por exemplo recuperados do banco de dados
    'link' => 'http://gitlab.com',
    'approved' => false,
    'merged' => false,
]);

$compositeMergeRequest->createMergeRequest($mergeRequest);

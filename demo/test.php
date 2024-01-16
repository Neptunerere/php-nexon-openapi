#!/usr/bin/env php
<?php

include_once __DIR__ . "/../vendor/autoload.php";

use GuzzleHttp\Client;
use Neptunerere\PhpNexonOpenApi\Utility\GuzzleUrlBuilder;
use Neptunerere\PhpNexonOpenApi\{
    Configuration,
    NexonOpenApi,
};
use Neptunerere\PhpNexonOpenApi\Runner\{
    DecodeJsonStringRunner,
    GuzzleRunner,
};

$nexonOpenApi = new NexonOpenApi(new Configuration([
    Configuration::API_KEY => 'api_key',
]));
$nexonOpenApi->addRunner(new GuzzleRunner(new Client(), new GuzzleUrlBuilder()));
$nexonOpenApi->addRunner(new DecodeJsonStringRunner());

$result = $nexonOpenApi->run(new \Neptunerere\PhpNexonOpenApi\Command\MapleStory\Character\FindCharacterByAccessId('character_name'));

var_dump($result);
exit;
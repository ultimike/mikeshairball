<?php

require_once 'vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$array = [
    'foo' => 'bar',
    'bar' => ['foo' => 'bar', 'bar' => 'baz'],
];

$yaml = Yaml::dump($array);

file_put_contents('hairball.yaml', $yaml);

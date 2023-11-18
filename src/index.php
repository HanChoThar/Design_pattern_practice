<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Src\factory_pattern\FaceBookPoster;

$result = new FaceBookPoster('gojo', 'goat123@');
$result->post('hello world');


<?php

require 'vendor/autoload.php';

use Onphpoint\ObjectOrientedPhp\YouTube;
use Onphpoint\ObjectOrientedPhp\Vimeo;

$videos = [];

$videos[] = new Vimeo("name", "id");
$videos[] = new YouTube("name", "id");



echo <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodtube</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Foodtube</h1>
HTML;



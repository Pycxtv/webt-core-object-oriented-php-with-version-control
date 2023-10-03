<?php

require 'vendor/autoload.php';

use Onphpoint\ObjectOrientedPhp\YouTube;
use Onphpoint\ObjectOrientedPhp\Vimeo;

$videos = [];

$videos[] = new Vimeo("FOOD", "305185528");
$videos[] = new Vimeo("Food Glorious Food Reel - Taller Stories", "415181652");
$videos[] = new Vimeo("Food demoreel", "303516290");
$videos[] = new Vimeo("Food Trip | Food Showreel 2020", "445903081");
$videos[] = new Vimeo("Christmas On FOOD - LifeStyle FOOD Channel", "38407821");
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



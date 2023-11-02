<?php

require '../vendor/autoload.php';

use Onphpoint\ObjectOrientedPhp\YouTube;
use Onphpoint\ObjectOrientedPhp\Vimeo;

$videos = [];
$videos[] = new YouTube("7 Healthy And Low Carb Recipes • Tasty", "GDS1OVF46UY");
$videos[] = new YouTube("This Anti-inflammatory Meal Will Make You Feel Great", "nFGXcfgOFC4");
$videos[] = new YouTube("10 Healthy Food Swaps You Never Thought To Try", "0g1uOi8K0mI");
$videos[] = new YouTube("Easy Healthy Meals You Can Eat Every Week", "UgA_5V3Jro0");
$videos[] = new YouTube("Get Healthy: Healthy Diet | NBC Learn", "SuNc0QRTvGA");
$videos[] = new Vimeo("FOOD", "305185528");
$videos[] = new Vimeo("Food Glorious Food Reel - Taller Stories", "415181652");
$videos[] = new Vimeo("Food demoreel", "303516290");
$videos[] = new Vimeo("Food Trip | Food Showreel 2020", "445903081");
$videos[] = new Vimeo("Christmas On FOOD - LifeStyle FOOD Channel", "38407821");



echo <<<'HTML'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Foodtube</title>
    <link rel="stylesheet" href="custom.css" >
</head>
<body class="text-md-center">
<h1 class="px-4 py-2">Foodtube</h1>
<main class="grid px-4">
HTML;

foreach ($videos as $video) {
	echo <<<"HTML"
     
        <div class="card g-col-12 g-col-sm-6 g-col-md-4 g-col-lg-3 overflow-hidden">
			{$video->getHTML()}  
<div class="card-body">
    <h5 class="card-title">{$video->getName()}</h5>
    <p class="card-text">{$video->getSource()}</p>
  </div>
</div>

HTML;

}
echo <<<END
</main>
</body>
</html>
END;


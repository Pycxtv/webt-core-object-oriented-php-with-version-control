<?php

require 'vendor/autoload.php';

use Onphpoint\ObjectOrientedPhp\YouTube;
use Onphpoint\ObjectOrientedPhp\Vimeo;

$videos = [];

$videos[] = new Vimeo("name", "id");

$videos[0] = new YouTube("7 Healthy And Low Carb Recipes • Tasty", "GDS1OVF46UY");
$videos[1] = new YouTube("This Anti-inflammatory Meal Will Make You Feel Great", "nFGXcfgOFC4");
$videos[2] = new YouTube("10 Healthy Food Swaps You Never Thought To Try", "0g1uOi8K0mI");
$videos[3] = new YouTube("Easy Healthy Meals You Can Eat Every Week", "5V3Jro0");
$videos[4] = new YouTube("Get Healthy: Healthy Diet | NBC Learn", "SuNc0QRTvGA");



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
<main>
HTML;

foreach ($videos as $video) {
	echo <<<"HTML"
    <div class="content-box">
        <h2>{$video->getName()}</h2>
        <p>{$video->getSource()}</p>
        {$video->getHTML()}
    </div>
HTML;

}
echo <<<END
</main>
</body>
</html>
END;


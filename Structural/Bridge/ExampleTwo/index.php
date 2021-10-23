<?php

namespace DesignPatterns\Structural\Bridge\ExampleTwo;

require_once "../../../vendor/autoload.php";

$darkTheme = new DarkTheme();

$about = new About($darkTheme);
$careers = new Careers($darkTheme);

echo $about->getContent(); // "About page in Dark Black";
echo $careers->getContent(); // "Careers page in Dark Black";

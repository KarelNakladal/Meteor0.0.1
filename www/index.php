<?php

use Meteor\Autoload\Autoload;

require __DIR__ . '/../Autoload.php';

use Meteor;

$app = new Meteor\App;
$app->run();

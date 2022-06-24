<?php
define('BASEPATH', __DIR__);
//var_dump(__DIR__);
require_once BASEPATH . '/Meteor/src/Autoload/Autoload_real.php';

return AutoloadFinal::load();
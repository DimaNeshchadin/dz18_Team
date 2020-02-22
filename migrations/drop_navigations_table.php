<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->drop('navigations');
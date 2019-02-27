<?php
require_once 'Journey.php';
require_once 'Car.php';

$jorney = new Journey(new Bike());
$jorney->vehicle->run();
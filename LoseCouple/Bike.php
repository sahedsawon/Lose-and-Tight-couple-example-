<?php
/**
 * Created by PhpStorm.
 * User: smsaw
 * Date: 2/27/2019
 * Time: 1:12 PM
 */
require_once 'Vehicle.php';

class Bike implements VehicleInterface {


    public function run()
    {
        echo 'Bike run';
    }

}

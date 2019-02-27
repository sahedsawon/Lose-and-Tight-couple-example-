<?php
/**
 * Created by PhpStorm.
 * User: smsaw
 * Date: 2/27/2019
 * Time: 1:14 PM
 */

class Journey
{
    /**
     * @var VehicleInterface
     */
    public $vehicle;

    /**
     * Journey constructor.
     * @param VehicleInterface $vehicle
     */
    public function __construct(VehicleInterface $vehicle)
    {
        $this->vehicle = $vehicle;
    }
}
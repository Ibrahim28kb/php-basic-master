<?php

class car
{
    public $color;
    private $model;

    function setCarModel($month)
    {
        if ($month < date('n')) {
            return $this->model = $month;
        } else {
            echo 'Invalid Month!';
        }
    }

    function getCarModel()
    {
        return $this->model;
    }
}

$carObject = new car();
$carObject->color = ' red';
$carObject->setCarModel(07);

echo ' Model : ' . $carObject->getCarModel();
echo ' Color : ' . $carObject->color;


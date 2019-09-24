<?php

class car
{
    public $color;

    private $model;

    function setCarModel($month)
    {
        if ($month < date('m')) {
            return $this->model = $month;
        } else {
            return 'Invalid Month!';
        }
    }

    function getCarModel()
    {
        return $this->model;
    }
}

$carObject = new car();

$carObject->color = ' red';

$carObject->setCarModel(11);

echo $carObject->getCarModel();

echo $carObject->color;


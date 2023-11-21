<?php
namespace app\models;

abstract class BaseShape
{
    protected $radius;
    protected $height;
    public function __construct($radius, $height){
        $this->radius = $radius;
        $this->height = $height;
    }
}
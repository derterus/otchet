<?php
namespace app\models;

class Cylinder extends BaseShape{
    public function getArea(){
        return  2* pi() *$this->radius * ($this->radius + $this->height );
    }
    public function getValue(){
        return  pi() * $this->radius **2 *$this->height;
    }
}
<?php
namespace app\models;

class Cone extends BaseShape{
    public function getArea(){
        return pi()*$this->radius * ($this->radius +sqrt($this->height + $this-> radius));
    
    }
    public function getValue(){
        return (1/3) * pi() * $this->radius **2 *$this->height;
    }
}
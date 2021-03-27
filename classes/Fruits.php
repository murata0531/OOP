<?php

//1 how to create class:

class Fruits{
    //public $name = 'banana';
    //private $color = 'red';
    //$size;

    private $name;
    private $color;

    //methd - functions
    //setters - as assigns/gives/sets values to  properties
    public function set_values($n, $c){
        $this->name = $n;
        $this->color = $c;
    }

    //getters - returns the values of properties
    public function get_name(){
        return $this->name;
    }

    public function get_color(){
        return $this->color;
    }
}


?>
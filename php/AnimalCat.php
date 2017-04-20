<?php

class Animal {

    public $name;

    public function __construct($name = '') {

        $this->name = $name;

    }

    public function getName() {

        return $this->name;

    }

}

class Cat extends Animal {

    public function meow() {

        return __CLASS__ . ' ' . $this->name . ' is saying meow';

    }

}

echo '<hr><pre>';

$cat = new Cat ('garfield');

echo $cat->getName() . '<br>';
echo $cat->meow() . '<br>';

var_dump($cat->getName () === 'garfield'); // true;
var_dump($cat->meow () === 'Cat garfield is saying meow'); // true;

<?php
class Food {
    private $name,$price;

    function __construct(string $name, $price){
    $this->name = $name;
    $this->price = $price; 
    }

    function show_price(){ 
    }
}
    $potato = new Food("potato", 250);
    $potato->show_price();
    print_r($potato);
    echo '<br>';

class Animal {
    private $name,$height,$weight;

    function __construct(string $name, $height, $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }
    function show_height(){
    }
}
    $dog = new Animal("dog", 60, 5000);
    $dog->show_height();
    print_r($dog);



?>
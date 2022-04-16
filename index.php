<?php

require_once 'Car.php';

$myCar = new Car('red', 4, 'fuel');

try{
    $myCar->start();
} 
catch(Exception $e){
    $myCar->setHasParkBrake(false);
    echo 'Exception received:'. $e->getMessage();
    // Call the start method to make sure the car is started at this point
    $myCar->start();

 } finally{
     echo 'Ma voiture roule comme un donut';
}

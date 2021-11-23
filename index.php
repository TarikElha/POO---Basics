<?php

require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";
require_once "Skateboard.php";

require_once "MotorWay.php";
require_once "ResidentialWay.php";
require_once "PedestrianWay.php";

$car = new Car("blue", 5, "Diesel");

try {
    $car->start();
} catch(Exception $e){
    $car->setParkBrake(false);
} finally{
    echo "Ma voiture roule comme un donut";
}

/*
//creation des Véhicules
$car = new Car("blue", 5, "Diesel");

$truck = new Truck("purple", 3, "fuel", 30);

$bike = new Bicycle('blue', 1);
$skate = new Skateboard("yellow", 4);

//creation des routes
$motor = new MotorWay;
$residential = new ResidentialWay;
$pedestrian = new PedestrianWay;

//ajout des vehicules
$residential->addVehicle($car);
$residential->addVehicle($bike);
$residential->addVehicle($skate);
$motor->addVehicle($bike);
$motor->addVehicle($car);
$pedestrian->addVehicle($car);
$pedestrian->addVehicle($bike);

//affichage des tableaux dans lesquels les vehicules ont été ajoutés
var_dump($residential->getCurrentVehicles());
var_dump($motor->getCurrentVehicles());
var_dump($pedestrian->getCurrentVehicles());
*/

/*
//Moving truck

echo "Moving Truck : \n";

echo $truck->forward();

echo "\n Vitesse du camion : " . $truck->getCurrentSpeed() . ' km/h' . "\n";

echo $truck->getStock()."\n";

echo $truck->filling(10)."\n";
echo $truck->getStock()."\n";
echo $truck->filling(10)."\n";
echo $truck->getStock()."\n";
echo $truck->filling(10)."\n";
echo $truck->getStock()."\n";
echo $truck->filling(10)."\n";
echo $truck->getStock()."\n";


echo "\n Vitesse du camion : " . $truck->getCurrentSpeed() . ' km/h' . "\n";

echo $truck->brake()."\n";


// Moving bike
 echo "Moving bike : \n";

echo $bike->forward();

echo "\n Vitesse du vélo : " . $bike->getCurrentSpeed() . ' km/h' . "\n";

echo $bike->brake();

echo "\n Vitesse du vélo : " . $bike->getCurrentSpeed() . ' km/h' . "\n";

echo $bike->brake()."\n";

// Moving Car

echo "Moving Car : \n";

echo $car->forward();

echo "\n Vitesse de la voiture : " . $car->getCurrentSpeed() . ' km/h' . "\n";

echo $car->brake();

echo "\n Vitesse de la voiture : " . $car->getCurrentSpeed() . ' km/h' . "\n";

echo $car->brake()."\n"; */
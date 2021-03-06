<?php
/**
 * Created by PhpStorm.
 * User: sammgabriel
 * Date: 2019-02-19
 * Time: 12:38
 */

//turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//require autoload
require_once('vendor/autoload.php');

//create and instance of the Base class
$f3 = Base::instance();
//turn on fat free error reporting
$f3->set('DEBUG',3);

//define a default route
$f3->route('GET /', function(){
    echo '<h1>Monsters</h1>';
    $monster = new Monster("Mike Wasowski");
    $monster->attack();
    $monster->setName("Randall Boggs");
    echo "My name is " . $monster->getName();
    $monster->attack();

    $vampire = new Vampire();
    $vampire->setName("Dracula");
    $vampire->attack();
    $vampire->attack();
    echo "Number of victims: " . $vampire->getVictims();

    $hydra = new Hydra("Timmy");
    $hydra->attack();
    $hydra->attack();
    $hydra->attack();
    echo "<p>The hydra now has " . $hydra->getHeads() . " heads!</p>";

    //$template = new Template;
    //echo $template->render('views/home.html');
});

//run fat free
$f3->run();
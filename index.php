<?php
require_once 'mallardduck.php';
require_once 'redheadduck.php';
require_once 'rubberduck.php';
require_once 'decoyduck.php';
require_once 'modelduck.php';

$duck1 = new MallardDuck;
$duck1->display();
$duck1->performQuack();
$duck1->swim();
$duck1->performFly();

echo '<br>';

$duck2 = new RedheadDuck;
$duck2->display();
$duck2->performQuack();
$duck2->swim();
$duck2->performFly();

echo '<br>';

$duck3 = new RubberDuck;
$duck3->display();
$duck3->performQuack();
$duck3->swim();
$duck3->performFly();

echo '<br>';

$duck4 = new DecoyDuck;
$duck4->display();
$duck4->performQuack();
$duck4->swim();
$duck4->performFly();

echo '<br>';

$duck5 = new ModelDuck;
$duck5->display();
$duck5->performQuack();
$duck5->swim();
$duck5->performFly();
$duck5->setFlyBehavior(new FlyRocketPowered());
$duck5->performFly();
?>
<?php
require_once 'duck.php';
require_once 'quack.php';
require_once 'flywithwings.php';

class MallardDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display() {
        echo 'я кряква<br>';
    }
}
?>
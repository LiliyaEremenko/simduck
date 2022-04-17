<?php
require_once 'duck.php';
require_once 'squeak.php';
require_once 'flynoway.php';

class RubberDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Squeak();
    }

    public function display() {
        echo 'я резиновая утка<br>';
    }
}
?>
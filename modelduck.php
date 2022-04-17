<?php
require_once 'duck.php';
require_once 'flynoway.php';
require_once 'mutequack.php';
require_once 'flyrocketpowered.php';

class ModelDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display() {
        echo 'я модель утки<br>';
    }
}
?>
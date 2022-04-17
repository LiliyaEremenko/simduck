<?php
require_once 'flybehavior.php';
require_once 'quackbehavior.php';

abstract class Duck {
    protected $flyBehavior;
    protected $quackBehavior;

    public function display() {
        
    }

    public function swim() {
        echo 'я плыву<br>';
    }

    public function performQuack() {
        $this->quackBehavior->quack1();
    }
    public function performFLy() {
        $this->flyBehavior->fly();
    }

    public function setQuackBehavior($newQuack) {
        $this->quackBehavior = $newQuack;
    }
    public function setFlyBehavior($newFly) {
        $this->flyBehavior = $newFly;
    }
}
?>
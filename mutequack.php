<?php
require_once 'quackbehavior.php';

class MuteQuack implements QuackBehavior {
    public function quack1() {
        echo 'я молчу<br>';
    }
}
?>
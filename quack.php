<?php
require_once 'quackbehavior.php';

class Quack implements QuackBehavior {
    public function quack1() {
        echo 'я крякаю<br>';
    }
}
?>
<?php
require_once 'flybehavior.php';

class FlyNoWay implements FlyBehavior {
    public function fly() {
        echo 'я не летаю<br>';
    }
}
?>
<?php
require_once 'flybehavior.php';

class FlyRocketPowered implements FlyBehavior {
    public function fly() {
        echo 'я лечу на реактивной тяге<br>';
    }
}
?>
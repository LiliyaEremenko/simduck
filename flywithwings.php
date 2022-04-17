<?php
require_once 'flybehavior.php';

class FLyWithWings implements FlyBehavior {
    public function fly() {
        echo 'я лечу<br>';
    }
}
?>
<?php

namespace app;

class Init {

    public function __construct() {
        new \app\core\App();
        require_once ("core/Controller.php");
    }
}

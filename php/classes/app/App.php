<?php

namespace App;

use App\Contracts\Heatable;

class App {
    function __construct() {
        $cup1 = new Coffee\Cup(['sip_size' => 2, 'gulp_size' => 20]);
        // $cup2 = (new Coffee\Cup())
        //     ->setGulpSize(45)
        //     ->setSipSize(15);

        if ($this->isBoiling($cup1)) {
            echo 'boiling' . PHP_EOL;
        } else {
            echo 'not boiling' . PHP_EOL;
        }
    }

    function isBoiling(Heatable $thing):bool {
        return $thing->getTemp() >= $thing->getBoilingPoint();
    }
}

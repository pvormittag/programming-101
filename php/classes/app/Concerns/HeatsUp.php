<?php

namespace App\Concerns;

trait HeatsUp {
    public function getBoilingPoint(): int {
        return $this->boiling_point;
    }

    public function getTemp(): int {
        return $this->temp;
    }
}

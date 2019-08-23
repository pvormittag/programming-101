<?php

namespace App\Coffee;

use App\Contracts\Heatable;
use App\Contracts\Pourable;
use App\Concerns\HeatsUp;

class Cup implements Pourable, Heatable {
    use HeatsUp;

    protected $gulp_size = 15;
    protected $sip_size = 1;

    private $boiling_point = 140;
    private $temp = 150;

    protected $volume = 100;

    function __construct(array $options = []) {
        $this->sip_size = $options['sip_size'] ?? $this->sip_size;
        $this->gulp_size = $options['gulp_size'] ?? $this->gulp_size;
    }

    public function sipFrom():self {
        $new_volume = $this->volume - $this->sip_size;

        if ($new_volume < 0) {
            throw new \Exception('Nothing left to sip!');
        }

        $this->volume = $new_volume;
        return $this;
    }

    public function gulpFrom():self {
        $new_volume = $this->volume - $this->gulp_size;

        if ($new_volume < 0) {
            throw new \Exception('Nothing left to gulp!');
        }

        $this->volume = $new_volume;
        return $this;
    }

    public function getVolume():float {
        return $this->volume;
    }

    public function getGulpSize():float {
        return $this->gulp_size;
    }

    public function setGulpSize(float $value):self {
        $this->gulp_size = $value;
        return $this;
    }

    public function getSipSize():float {
        return $this->sip_size;
    }

    public function setSipSize(float $value):self {
        $this->sip_size = $value;
        return $this;
    }

    public function getTippingPoint(): float {
        return 0.4;
    }
}

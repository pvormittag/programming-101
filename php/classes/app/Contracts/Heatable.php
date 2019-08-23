<?php

namespace App\Contracts;

interface Heatable
{
    function getTemp(): int;
    function getBoilingPoint(): int;
}

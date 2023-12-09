<?php

namespace App\Week;

class Tuesday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote = 'Terça-feira, ainda estamos só começo!';

        return parent::getQuote();
    }
}
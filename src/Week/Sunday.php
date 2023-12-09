<?php

namespace App\Week;

class Sunday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote =  'Domingão, mais um dia de descanso e lazer, mas lembrando que amanhã já é segunda-feira.';

        return parent::getQuote();
    }
}
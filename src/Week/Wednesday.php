<?php

namespace App\Week;

class Wednesday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote = 'Quarta-feira, dia da Wandinha, estamos na metade';

        return parent::getQuote();
    }
}
<?php

namespace App\Week;

class Thursday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote = 'Quinta-feira, quase lá. Enquanto aguarda, quital postar um tbt?';

        return parent::getQuote();
    }
}
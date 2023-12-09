<?php

namespace App\Week;

class Monday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote = 'Segunda-feira, dia de começar a semana com o pé direito.';

        return parent::getQuote();
    }
}
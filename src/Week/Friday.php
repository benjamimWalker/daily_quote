<?php

namespace App\Week;

class Friday extends Day
{

    public function getQuote(): string
    {
        $this->normalDayQuote = 'Sextou! keep calm e nem pense em fazer deploy hoje!';

        return parent::getQuote();
    }
}
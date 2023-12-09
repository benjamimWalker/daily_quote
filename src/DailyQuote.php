<?php

namespace App;

use App\Week\DayInterface;

class DailyQuote
{

    public function __construct(public DayInterface $day)
    {
    }

    public function __invoke(): void
    {
        echo $this->day->getQuote();
    }
}
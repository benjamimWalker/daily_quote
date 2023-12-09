<?php

namespace App\Week;

use BrazilHoliday\Holiday;
use DateTime;

class Day implements DayInterface
{
    protected string $normalDayQuote = '';

    public function __construct(private Holiday $holiday)
    {
    }

    public function getQuote(): string
    {
        $this->holiday->load(date('Y'));

        if ($this->holiday->todayHoliday()) {
            return 'Hoje é um dia especial, feriado';
        }

        return $this->normalDayQuote;
    }
}
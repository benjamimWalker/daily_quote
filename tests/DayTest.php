<?php

namespace Tests;

use App\DailyQuote;
use App\Week\Day;
use App\Week\DayInterface;
use BrazilHoliday\Holiday;
use DateTime;
use PHPUnit\Framework\TestCase;

class DayTest extends TestCase
{
    public function testGetAQuoteForTheCorrectDay()
    {
        $day = $this->createMock(DayInterface::class);

        $day->method('getQuote')
            ->willReturn('Hoje é um dia especial, dia de teste');

        $day->expects($this->once())
            ->method('getQuote');

        (new DailyQuote($day))();

        $this->expectOutputString('Hoje é um dia especial, dia de teste');
    }

    public function testGetAHolidayQuoteCorrectly()
    {
        $holiday = $this->createMock(Holiday::class);

        $holiday->method('todayHoliday')
            ->willReturn(true);

        $holiday->expects($this->once())
            ->method('todayHoliday');

        $holiday->expects($this->once())
            ->method('load');

        $day = new Day($holiday);

        $this->assertEquals('Hoje é um dia especial, feriado', $day->getQuote());
    }
}

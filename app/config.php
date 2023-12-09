<?php

use BrazilHoliday\Holiday;
use App\Week\{
    DayInterface,
    Friday,
    Monday,
    Saturday,
    Sunday,
    Thursday,
    Tuesday,
    Wednesday
};

use function DI\autowire;

switch (date('w')) {
    case 0:
        $day = Sunday::class;
        break;
    case 1:
        $day = Monday::class;
        break;
    case 2:
        $day = Tuesday::class;
        break;
    case 3:
        $day = Wednesday::class;
        break;
    case 4:
        $day = Thursday::class;
        break;
    case 5:
        $day = Friday::class;
        break;
    case 6:
        $day = Saturday::class;
        break;
}

return [
    DayInterface::class => autowire($day),
];

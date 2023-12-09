<?php

namespace App\Week;

class Saturday extends Day
{
    public function getQuote(): string
    {
        $this->normalDayQuote = 'Sábadão: É inovador e revolucionário? Não. Mas, durante esse dia, cria ali pra você
     um lugar tão aconchegante, tão reconfortante, tão capaz de reconstruir a sua fé na humanidade que não tem preço';

        return parent::getQuote();
    }
}
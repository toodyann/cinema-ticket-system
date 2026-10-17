<?php

namespace App\Services;

class Calculator
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function subtract($x, $y)
    {
        return $x - $y;
    }

    public function calculateTicketTotal(float $ticketPrice, int $quantity): float
    {
        return $ticketPrice * $quantity;
    }
}

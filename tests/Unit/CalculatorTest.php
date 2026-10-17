<?php

namespace Tests\Unit;

use App\Services\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_add(): void
    {
        $calculator = new Calculator;

        $this->assertEquals(5, $calculator->add(2, 3));
    }

    public function test_subtract(): void
    {
        $calculator = new Calculator;

        $this->assertEquals(3, $calculator->subtract(5, 2));
    }

    public function test_calculates_ticket_total(): void
    {
        $calculator = new Calculator;

        $this->assertSame(37.5, $calculator->calculateTicketTotal(12.5, 3));
    }
}

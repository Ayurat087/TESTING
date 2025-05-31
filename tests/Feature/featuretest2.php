<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Helpers\LoanCalculatorHelper;

class LoanCalculatorExtraFeatureTest extends TestCase
{
    /** @test */
    public function it_can_calculate_outstanding_balance()
    {
        $principal = 100_000;
        $interestRate = 12;
        $years = 5;
        $monthsPaid = 24;

        $balance = LoanCalculatorHelper::calculateOutstandingBalance($principal, $interestRate, $years, $monthsPaid);

        // Approximate expected value (can vary depending on rounding)
        $this->assertEquals(63_672.92, $balance); // ±1 due to rounding may be acceptable
    }

    /** @test */
    public function it_can_calculate_principal_paid_so_far()
    {
        $principal = 100_000;
        $interestRate = 12;
        $years = 5;
        $monthsPaid = 24;

        $principalPaid = LoanCalculatorHelper::calculatePrincipalPaid($principal, $interestRate, $years, $monthsPaid);

        $this->assertEquals(36_327.08, $principalPaid); // 100,000 - sisa
    }
}

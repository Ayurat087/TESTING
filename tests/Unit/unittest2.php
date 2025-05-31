<?php

use PHPUnit\Framework\TestCase;
use App\Helpers\LoanCalculatorHelper;

class LoanCalculatorHelperTest extends TestCase
{
    /**
     * @dataProvider monthlyInstallmentProvider
     */
    public function testCalculateMonthlyInstallment($principal, $annualInterestRate, $years, $expected)
    {
        $result = LoanCalculatorHelper::calculateMonthlyInstallment($principal, $annualInterestRate, $years);
        $this->assertEquals($expected, $result);
    }

    public function monthlyInstallmentProvider()
    {
        return [
            // principal, annualInterestRate, years, expectedMonthlyInstallment
            [100000, 6, 10, 1110.21],
            [120000, 0, 10, 1000.00],
            [50000, 5, 5, 943.56],
            [200000, 7.5, 15, 1859.53],
        ];
    }

    /**
     * @dataProvider totalInterestProvider
     */
    public function testCalculateTotalInterest($installment, $years, $principal, $expected)
    {
        $result = LoanCalculatorHelper::calculateTotalInterest($installment, $years, $principal);
        $this->assertEquals($expected, $result);
    }

    public function totalInterestProvider()
    {
        return [
            [1110.21, 10, 100000, 33225.20],
            [1000.00, 10, 120000, 0.00],
            [943.56, 5, 50000, 6633.60],
            [1859.53, 15, 200000, 153715.40],
        ];
    }

    /**
     * @dataProvider totalPaymentProvider
     */
    public function testCalculateTotalPayment($installment, $years, $expected)
    {
        $result = LoanCalculatorHelper::calculateTotalPayment($installment, $years);
        $this->assertEquals($expected, $result);
    }

    public function totalPaymentProvider()
    {
        return [
            [1110.21, 10, 133225.20],
            [1000.00, 10, 120000.00],
            [943.56, 5, 56613.60],
            [1859.53, 15, 335115.60],
        ];
    }
}

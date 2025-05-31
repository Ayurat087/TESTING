<?php

use PHPUnit\Framework\TestCase;
use App\Helpers\CalculatorHelper;

class CalculatorHelperTest extends TestCase
{
    public function testAdd()
    {
        $this->assertEquals(5, CalculatorHelper::add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(1, CalculatorHelper::subtract(3, 2));
    }

    public function testPerkalian()
    {
        $this->assertEquals(6, CalculatorHelper::perkalian(2, 3));
    }

    public function testPembagian()
    {
        $this->assertEquals(2, CalculatorHelper::pembagian(6, 3));
    }

    public function testPembagianDenganNol()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Tidak bisa membagi dengan nol.");
        CalculatorHelper::pembagian(5, 0);
    }

    public function testModulus()
    {
        $this->assertEquals(1, CalculatorHelper::modulus(7, 3));
    }

    public function testPangkat()
    {
        $this->assertEquals(8, CalculatorHelper::pangkat(2, 3));
    }

    public function testAkar()
    {
        $this->assertEquals(5, CalculatorHelper::akar(25));
    }

    public function testAkarNegatif()
    {
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Tidak bisa mengambil akar dari bilangan negatif.");
        CalculatorHelper::akar(-4);
    }
}

<?php

use PHPUnit\Framework\TestCase;

require_once 'Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calculator = new Calculator();
        $this->assertEquals(5, $calculator->add(2, 3)); // Vérifie si le résultat est bien 5
    }

    public function testSubtraction()
    {
        $calculator = new Calculator();
        $this->assertSame(1, $calculator->subtract(3, 3)); // Vérifie si le résultat est strictement 1 (même type et valeur)
    }

    public function testMultiplication()
    {
        $calculator = new Calculator();
        $this->assertGreaterThan(5, $calculator->multiply(2, 3)); // Vérifie si le résultat est supérieur à 5
    }

    public function testDivision()
    {
        $calculator = new Calculator();
        $this->assertIsFloat($calculator->divide(10, 2)); // Vérifie que le retour est bien un float
    }

    public function testDivisionByZero()
    {
        $this->expectException(InvalidArgumentException::class); // Vérifie que l'exception est levée
        $calculator = new Calculator();
        $calculator->divide(10, 0);
    }

    public function testInstance()
    {
        $calculator = new Calculator();
        $this->assertInstanceOf(Calculator::class, $calculator); // Vérifie que l'objet est une instance de Calculator
    }

    public function testNotEmpty()
    {
        $calculator = new Calculator();
        $this->assertNotEmpty($calculator->add(1, 1)); // Vérifie que la valeur retournée n'est pas vide
    }
}

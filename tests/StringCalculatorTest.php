<?php declare(strict_types=1);

use kata\StringCalculator;
use PHPUnit\Framework\TestCase;

final class StringCalculatorTest extends TestCase
{
    public function testEmptyString()
    {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add("");

        $this->assertEquals(0, $result);
    }

    public function testSingleInput()
    {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add("2");

        $this->assertEquals(2, $result);
    }

    public function testMultipleInput() {
        $stringCalculator = new StringCalculator();

        $result = $stringCalculator->add("1,2");

        $this->assertEquals(3, $result);
    } 
}
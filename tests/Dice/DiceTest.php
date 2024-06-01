<?php

namespace App\Tests\Dice;

use App\Dice\Dice;
use PHPUnit\Framework\TestCase;

class DiceTest extends TestCase
{
    public function testRoll(): void
    {
        $dice = new Dice();
        $value = $dice->roll();

        $this->assertIsInt($value);
        $this->assertGreaterThanOrEqual(1, $value);
        $this->assertLessThanOrEqual(6, $value);
    }

    public function testGetValue(): void
    {
        $dice = new Dice();
        $value = $dice->roll();

        $this->assertEquals($value, $dice->getValue());
    }

    public function testGetAsString(): void
    {
        $dice = new Dice();
        $value = $dice->roll();

        $expectedString = '[' . $value . ']';
        $this->assertEquals($expectedString, $dice->getAsString());
    }
}

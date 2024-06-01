<?php

namespace App\Dice;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class DiceHand.
 */
class DiceHandTest extends TestCase
{
    /**
     * Stub the dices to assure the value can be asserted.
     */
    public function testAddStubbedDices(): void
    {
        // Create a stub for the Dice class.
        $stub = $this->createMock(Dice::class);

        // Configure the stub.
        $stub->method('roll')
             ->willReturn(6);
        $stub->method('getValue')
             ->willReturn(6);

        $dicehand = new DiceHand();
        $dicehand->add(clone $stub);
        $dicehand->add(clone $stub);
        $dicehand->roll();
        $res = $dicehand->sum();
        $this->assertEquals(12, $res);
    }
    public function testRoll(): void
    {
        $diceHand = new DiceHand();
        $dice1 = new Dice();
        $dice2 = new Dice();

        $diceHand->add($dice1);
        $diceHand->add($dice2);

        $diceHand->roll();

        $this->assertContains($dice1->getValue(), $diceHand->getValues());
        $this->assertContains($dice2->getValue(), $diceHand->getValues());
    }
    public function testSum(): void
    {
        $diceHand = new DiceHand();
        $dice1 = new Dice();
        $dice2 = new Dice();

        $diceHand->add($dice1);
        $diceHand->add($dice2);

        $diceHand->roll();

        $this->assertEquals($dice1->getValue() + $dice2->getValue(), $diceHand->sum());
    }

}

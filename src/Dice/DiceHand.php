<?php

namespace App\Dice;

/**
 * Class DiceHand
 * 
 * Represents a hand of dice.
 */
class DiceHand
{
    /**
     * @var Dice[] An array containing dice objects.
     */
    private array $hand = [];

    /**
     * Adds a die to the hand.
     * 
     * @param Dice $die The die to add to the hand.
     * @return void
     */
    public function add(Dice $die): void
    {
        $this->hand[] = $die;
    }

    /**
     * Rolls all dice in the hand.
     * 
     * @return void
     */
    public function roll(): void
    {
        foreach ($this->hand as $die) {
            $die->roll();
        }
    }

    /**
     * Returns the number of dice in the hand.
     * 
     * @return int The number of dice in the hand.
     */
    public function getNumberDices(): int
    {
        return count($this->hand);
    }

    /**
     * Returns an array containing the values of all dice in the hand.
     * 
     * @return int[] An array containing the values of all dice in the hand.
     */
    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $die) {
            $values[] = $die->getValue();
        }
        return $values;
    }

    /**
     * Returns the sum of all dice values in the hand.
     * 
     * @return int The sum of all dice values in the hand.
     */
    public function sum(): int
    {
        $sum = 0;
        foreach ($this->hand as $die) {
            $sum += $die->getValue();
        }
        return $sum;
    }

    /**
     * Returns an array containing the graphical representations of all dice in the hand.
     * 
     * @return string[] An array containing the graphical representations of all dice in the hand.
     */
    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $die) {
            $values[] = $die->getAsString();
        }
        return $values;
    }
}

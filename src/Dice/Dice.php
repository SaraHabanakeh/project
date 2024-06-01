<?php

namespace App\Dice;

/**
 * Class Dice
 * 
 * Represents a single six-sided die.
 */
class Dice
{
    /**
     * @var int|null The current value of the die.
     */
    protected ?int $value;

    /**
     * Dice constructor.
     * Initializes the value of the die to null.
     */
    public function __construct()
    {
        $this->value = null;
    }

    /**
     * Rolls the die and sets its value to a random integer between 1 and 6.
     * 
     * @return int The value rolled on the die.
     */
    public function roll(): int
    {
        $this->value = random_int(1, 6);
        return $this->value;
    }

    /**
     * Gets the current value of the die.
     * 
     * @return int The current value of the die.
     * @throws \LogicException If the die value has not been set.
     */
    public function getValue(): int
    {
        if ($this->value === null) {
            throw new \LogicException("Dice value has not been set. Roll the dice first.");
        }
        return $this->value;
    }

    /**
     * Returns the string representation of the die's current value.
     * 
     * @return string The string representation of the die's current value.
     */
    public function getAsString(): string
    {
        return $this->value !== null ? "[{$this->value}]" : "[ ]";
    }
}

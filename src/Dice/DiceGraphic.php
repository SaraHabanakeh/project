<?php

namespace App\Dice;

/**
 * Class DiceGraphic
 * 
 * Represents a graphical six-sided die.
 */
class DiceGraphic extends Dice
{
    /**
     * @var string[] An array containing graphical representations of each die face.
     */
    private array $representation = [
        '⚀', // One dot
        '⚁', // Two dots
        '⚂', // Three dots
        '⚃', // Four dots
        '⚄', // Five dots
        '⚅', // Six dots
    ];

    /**
     * DiceGraphic constructor.
     * Calls the parent constructor to initialize the die value.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Returns the graphical representation of the die's current value.
     * 
     * @return string The graphical representation of the die's current value.
     */
    public function getAsString(): string
    {
        return $this->representation[$this->value - 1];
    }
}

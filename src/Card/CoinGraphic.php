<?php

namespace App\Card;

/**
 * Class CoinGraphic
 *
 * Represents a graphical representation of a coin balance.
 */
class CoinGraphic
{
    /**
     * @var float The balance of the coin.
     */
    private float $balance;

    /**
     * CoinGraphic constructor.
     *
     * @param float $balance The initial balance of the coin (default is 0).
     */
    public function __construct(float $balance = 0)
    {
        $this->balance = $balance;
    }

    /**
     * Get the balance of the coin.
     *
     * @return float The balance of the coin.
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

    /**
     * Adjusts the balance of the coin by a given amount.
     *
     * @param float $amount The amount by which to adjust the balance.
     * @return void
     */
    public function adjustBalance(float $amount): void
    {
        $this->balance += $amount;
    }

    /**
     * Get the graphical representation of the coin balance.
     *
     * @return string The graphical representation of the coin balance.
     */
    public function getGraphicRepresentation(): string
    {
        $coins = floor($this->balance);
        $representation = str_repeat('🪙', (int)$coins); // Ensure $times parameter is an integer
        return $representation;
    }
}

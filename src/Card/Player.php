<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardHand;

/**
 * Class Player
 * 
 * Represents a player in a card game.
 */
class Player
{
    /** @var string The name of the player. */
    private string $name;

    /** @var CardHand The hand of cards held by the player. */
    private CardHand $hand;

    /** @var CoinGraphic The graphical representation of the player's coin balance. */
    private CoinGraphic $coinGraphic;

    /** @var string The status of the player (e.g., playing, standing, busted). */
    private string $status;

    /**
     * Player constructor.
     * 
     * @param string $name The name of the player.
     * @param float $balance The initial balance of the player's coins (default is 0).
     */
    public function __construct(string $name, float $balance = 0)
    {
        $this->name = $name;
        $this->hand = new CardHand();
        $this->coinGraphic = new CoinGraphic($balance);
        $this->status = 'playing';
    }

    /**
     * Get the name of the player.
     * 
     * @return string The name of the player.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Add a card to the player's hand.
     * 
     * @param Card $card The card to add to the player's hand.
     * @return void
     */
    public function addCard(Card $card): void
    {
        $this->hand->addCard($card);
    }

    /**
     * Get the total value of the player's hand.
     * 
     * @return int The total value of the player's hand.
     */
    public function getHandValue(): int
    {
        return $this->hand->totalValue();
    }

    /**
     * Get the player's hand of cards.
     * 
     * @return CardHand The player's hand of cards.
     */
    public function getHand(): CardHand
    {
        return $this->hand;
    }

    /**
     * Check if the player's hand is busted (total value > 21).
     * 
     * @return bool True if the player's hand is busted, false otherwise.
     */
    public function isBusted(): bool
    {
        return $this->hand->totalValue() > 21;
    }

    /**
     * Check if the player has a blackjack (total value == 21 and 2 cards).
     * 
     * @return bool True if the player has a blackjack, false otherwise.
     */
    public function hasBlackJack(): bool
    {
        return $this->hand->totalValue() == 21 && count($this->hand->getCards()) == 2;
    }

    /**
     * Get the balance of the player's coins.
     * 
     * @return float The balance of the player's coins.
     */
    public function getBalance(): float
    {
        return $this->coinGraphic->getBalance();
    }

    /**
     * Adjust the balance of the player's coins by a given amount.
     * 
     * @param float $amount The amount by which to adjust the balance.
     * @return void
     */
    public function adjustBalance(float $amount): void
    {
        $this->coinGraphic->adjustBalance($amount);
    }

    /**
     * Get the graphical representation of the player's coin balance.
     * 
     * @return string The graphical representation of the player's coin balance.
     */
    public function getBalanceGraphic(): string
    {
        return $this->coinGraphic->getGraphicRepresentation();
    }

    /**
     * Get the status of the player.
     * 
     * @return string The status of the player.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the status of the player.
     * 
     * @param string $status The status to set for the player.
     * @return void
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}

<?php

namespace App\Card;

use App\Card\Card;
use App\Card\CardGraphic;

/**
 * Class DeckOfCards
 * 
 * Represents a deck of playing cards.
 */
class DeckOfCards
{
    /** @var Card[] An array to store the cards in the deck. */
    private array $cards = [];

    /**
     * Constructs a new DeckOfCards object with a standard deck of 52 cards.
     */
    public function __construct()
    {
        $suits = ['spades', 'heart', 'diamond', 'clover'];
        $values = range(1, 13);

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $card = new CardGraphic($suit, $value);
                $this->cards[] = $card;
            }
        }
    }

    /**
     * Get all the cards in the deck.
     * 
     * @return Card[] An array of Card objects representing the cards in the deck.
     */
    public function getCards(): array
    {
        return $this->cards;
    }

    /**
     * Get the sorted representation of the cards in the deck.
     * 
     * @return array<string, array<int, string>> An array representing the sorted cards.
     */
    public function getSortedCards(): array
    {
        $cards = $this->getCards();
        $sortedCards = [];

        foreach ($cards as $card) {
            $suit = $card->getSuit();
            $value = $card->getValue();

            $cardGraphic = new CardGraphic($suit, $value);
            $representation = $cardGraphic->getAsString();
            $sortedCards[$suit][$value] = $representation;
        }

        return $sortedCards;
    }

    /**
     * Shuffle the cards in the deck.
     * 
     * @return void
     */
    public function shuffle(): void
    {
        shuffle($this->cards);
    }

    /**
     * Draw a card from the top of the deck.
     * 
     * @return Card|null The card drawn, or null if the deck is empty.
     */
    public function drawCard(): ?Card
    {
        return array_pop($this->cards);
    }

    /**
     * Get the number of cards remaining in the deck.
     * 
     * @return int The number of cards remaining in the deck.
     */
    public function countCards(): int
    {
        return count($this->cards);
    }
}

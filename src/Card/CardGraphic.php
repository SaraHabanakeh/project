<?php

namespace App\Card;

use App\Card\Card;

/**
 * Class CardGraphic
 *
 * Represents graphical representation of cards based on their suit and value.
 */
class CardGraphic extends Card
{
    /**
     * An array representing the graphical representation of the cards.
     *
     * @var array<string, array<int, string>>
     */
    private array $representation = [
        'diamond' => [
            '1' => '🃁',
            '2' => '🃂',
            '3' => '🃃',
            '4' => '🃄',
            '5' => '🃅',
            '6' => '🃆',
            '7' => '🃇',
            '8' => '🃈',
            '9' => '🃉',
            '10' => '🃊',
            '11' => '🃋',
            '12' => '🃍',
            '13' => '🃎',
        ],
        'clover' => [
            '1' => '🃑',
            '2' => '🃒',
            '3' => '🃓',
            '4' => '🃔',
            '5' => '🃕',
            '6' => '🃖',
            '7' => '🃗',
            '8' => '🃘',
            '9' => '🃙',
            '10' => '🃚',
            '11' => '🃛',
            '12' => '🃝',
            '13' => '🃞',
        ],
        'heart' => [
            '1' => '🂱',
            '2' => '🂲',
            '3' => '🂳',
            '4' => '🂴',
            '5' => '🂵',
            '6' => '🂶',
            '7' => '🂷',
            '8' => '🂸',
            '9' => '🂹',
            '10' => '🂺',
            '11' => '🂻',
            '12' => '🂽',
            '13' => '🂾',
        ],
        'spades' => [
            '1' => '🂡',
            '2' => '🂢',
            '3' => '🂣',
            '4' => '🂤',
            '5' => '🂥',
            '6' => '🂦',
            '7' => '🂧',
            '8' => '🂨',
            '9' => '🂩',
            '10' => '🂪',
            '11' => '🂫',
            '12' => '🂭',
            '13' => '🂮',
        ],
    ];

    /**
     * Get the card as a string representation.
     *
     * @return string The graphical representation of the card.
     */
    public function getAsString(): string
    {
        $suit = $this->getSuit();
        $value = $this->getValue();
        return $this->representation[$suit][$value] ?? 'Invalid card';
    }

    /**
     * Get the suit of the card.
     *
     * @return string The suit of the card.
     */
    public function getSuitClass(): string
    {
        return $this->getSuit();
    }
}

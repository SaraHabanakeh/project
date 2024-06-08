<?php

namespace App\Card;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for class CardHand.
 */
class CardHandTest extends TestCase
{
    /**
     * Test that a CardHand object can be created.
     */
    public function testCreateCardHand(): void
    {
        $hand = new CardHand();
        $this->assertInstanceOf(CardHand::class, $hand);
    }

    /**
     * Test adding a card to the hand.
     */
    public function testAddCard(): void
    {
        $hand = new CardHand();
        $card = new Card("Hearts", 2);
        $hand->addCard($card);

        $cards = $hand->getCards();
        $this->assertCount(1, $cards);
        $this->assertSame($card, $cards[0]);
    }

    /**
     * Test calculating the total value of the hand without aces.
     */
    public function testTotalValueWithoutAces(): void
    {
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 10));
        $hand->addCard(new Card("Spades", 5));

        $totalValue = $hand->totalValue();
        $this->assertEquals(15, $totalValue);
    }

    /**
     * Test calculating the total value of the hand with aces.
     */
    public function testTotalValueWithAces(): void
    {
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 1));
        $hand->addCard(new Card("Spades", 1));
        $hand->addCard(new Card("Diamonds", 9));

        $totalValue = $hand->totalValue();
        $this->assertEquals(21, $totalValue);

        // Test hand with ace that should count as 1
        $hand = new CardHand();
        $hand->addCard(new Card("Hearts", 1));
        $hand->addCard(new Card("Spades", 9));
        $hand->addCard(new Card("Diamonds", 5));

        $totalValue = $hand->totalValue();
        $this->assertEquals(15, $totalValue);
    }

    public function testToArray(): void
    {

        $card1 = new CardGraphic('heart', 12); // Queen of hearts
        $card2 = new CardGraphic('clover', 10); // 10 of clovers

        $hand = new CardHand();
        $hand->addCard($card1);
        $hand->addCard($card2);


        $result = $hand->toArray();


        $expected = [
            [
                'suit' => 'heart',
                'value' => 12,
                'string_representation' => '🂽' // Emoji representation for Queen of hearts
            ],
            [
                'suit' => 'clover',
                'value' => 10,
                'string_representation' => '🃚' // Emoji representation for 10 of clovers
            ]
        ];

        $this->assertSame($expected, $result);
    }
}

<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * Controller for managing card game actions.
 */
class CardGameController extends AbstractController
{
    /**
     * Display the current session data.
     *
     * @Route("/session", name="session_debug")
     * 
     * @param SessionInterface $session The session interface.
     * 
     * @return Response
     */

    #[Route("/session", name: "session_debug")]
    public function showSession(SessionInterface $session): Response
    {
        return $this->render('card/session.html.twig', [
            'deck' => $session->get('deck'),
            'hand' => $session->get('hand')
        ]);
    }

    /**
     * Clear the session data.
     *
     * @Route("/session/delete", name="session_delete")
     * 
     * @param SessionInterface $session The session interface.
     * 
     * @return Response
     */

    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('success', 'Session has been successfully deleted ✔️.');
        return $this->redirectToRoute('session_debug');
    }

    /**
     * Display the home page for the card game.
     *
     * @Route("/card", name="card_start")
     * 
     * @return Response
     */

    #[Route("/card", name: "card_start")]
    public function home(): Response
    {
        return $this->render("card/home.html.twig");
    }

    /**
     * Display the deck of cards.
     *
     * @Route("/card/deck", name="card_deck")
     * 
     * @return Response
     */

    #[Route("/card/deck", name: "card_deck")]
    public function showDeck(): Response
    {
        $deck = new DeckOfCards();
        return $this->render('card/deck.html.twig', [
            'groupedCards' => $deck->getSortedCards(),
        ]);
    }

    /**
     * Shuffle the deck of cards and clear the session.
     *
     * @Route("/card/deck/shuffle", name="card_shuffle")
     * 
     * @param SessionInterface $session The session interface.
     * 
     * @return Response
     */

    #[Route("/card/deck/shuffle", name: "card_shuffle")]
    public function shuffleDeck(SessionInterface $session): Response
    {
        $session->clear();
        $deck = new DeckOfCards();
        $deck->shuffle();
        return $this->render('card/card_shuffle.html.twig', [
            'shuffledCards' => $deck->getCards(),
        ]);
    }

    /**
     * Draw a card from the deck and add it to the hand.
     *
     * @Route("/card/deck/draw", name="card_draw")
     * 
     * @param SessionInterface $session The session interface.
     * 
     * @return Response
     */

    #[Route("/card/deck/draw", name:"card_draw")]
    public function drawCard(SessionInterface $session): Response
    {
        $deck = $session->get('deck', new DeckOfCards());
        $hand = $session->get('hand', new CardHand());

        $drawnCard = $deck->drawCard();
        if ($drawnCard) {
            $hand->addCard($drawnCard);
        }

        $session->set('deck', $deck);
        $session->set('hand', $hand);

        return $this->render('card/draw_card.html.twig', [
            'drawnCard' => $drawnCard,
            'cardsRemaining' => count($deck->getCards()),
        ]);
    }

    /**
     * Draw a specified number of cards from the deck and add them to the hand.
     *
     * @Route("/card/deck/draw/{num}", name="card_draw_number")
     * 
     * @param SessionInterface $session The session interface.
     * @param int $num The number of cards to draw.
     * 
     * @return Response
     */

    #[Route("/card/deck/draw/{num}", name:"card_draw_number")]
    public function drawMultipleCards(SessionInterface $session, int $num): Response
    {
        $deck = $session->get('deck', new DeckOfCards());
        $hand = $session->get('hand', new CardHand());

        $drawnCards = [];
        for ($i = 0; $i < $num; $i++) {
            $drawnCard = $deck->drawCard();
            if ($drawnCard) {
                $hand->addCard($drawnCard);
                $drawnCards[] = $drawnCard;
            } else {
                break;
            }
        }

        $session->set('deck', $deck);
        $session->set('hand', $hand);

        return $this->render('card/draw_cards.html.twig', [
            'drawnCards' => $drawnCards,
            'cardsRemaining' => count($deck->getCards()),
        ]);
    }
}

<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\CardHand;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CardGameController extends AbstractController
{
    #[Route("/session", name: "session_debug")]
    public function showSession(SessionInterface $session): Response
    {
        return $this->render('card/session.html.twig', [
            'deck' => $session->get('deck'),
            'hand' => $session->get('hand')
        ]);
    }

    #[Route("/session/delete", name: "session_delete")]
    public function deleteSession(SessionInterface $session): Response
    {
        $session->clear();
        $this->addFlash('success', 'Session has been successfully deleted ✔️.');
        return $this->redirectToRoute('session_debug');
    }

    #[Route("/card", name: "card_start")]
    public function home(): Response
    {
        return $this->render("card/home.html.twig");
    }

    #[Route("/card/deck", name: "card_deck")]
    public function showDeck(): Response
    {
        $deck = new DeckOfCards();
        return $this->render('card/deck.html.twig', [
            'groupedCards' => $deck->getSortedCards(),
        ]);
    }

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

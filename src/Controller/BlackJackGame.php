<?php

namespace App\Controller;

use App\Card\DeckOfCards;
use App\Card\Player;
use App\Card\Card;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use LogicException;

/**
 * Controller for managing a Blackjack game.
 */

class BlackJackGame extends AbstractController
{
    /**
     * Reset the game by clearing the session.
     *
     * @Route("/game/reset", name="game_reset", methods={"POST"})
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */

    #[Route("/game/reset", name: "game_reset", methods: ["POST"])]
    public function reset(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute("game_setup");
    }

    /**
     * Render the main game page.
     *
     * @Route("game/", name="game-page")
     *
     * @return Response
     */

    #[Route("game/", name: "game-page")]
    public function home(): Response
    {
        return $this->render("black-jack/game.html.twig");
    }

    /**
     * Render the game documentation page.
     *
     * @Route("/game/doc", name="game-doc")
     *
     * @return Response
     */

    #[Route("/game/doc", name: "game-doc")]
    public function doc(): Response
    {
        return $this->render("black-jack/doc.html.twig");
    }

    /**
     * Render the setup form for starting the game.
     *
     * @Route("/setup", name="game_setup")
     *
     * @return Response
     */

    #[Route("/setup", name: "game_setup")]
    public function setup(): Response
    {
        return $this->render('black-jack/form.html.twig');
    }

    /**
     * Start the game with the given players.
     *
     * @Route("/start", name="game_start", methods={"POST"})
     *
     * @param Request $request The HTTP request object.
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */

    #[Route("/start", name: "game_start", methods: ["POST"])]
    public function start(Request $request, SessionInterface $session): Response
    {
        $playerData = $request->request->all('players');
        $players = [];
        foreach ($playerData as $data) {
            $players[] = new Player($data['name'], (int)$data['balance']);
        }

        $deck = new DeckOfCards();
        $deck->shuffle();

        $bank = new Player('Bank');

        foreach ($players as $player) {
            $this->addCardToPlayer($player, $deck);
            $this->addCardToPlayer($player, $deck);

            if ($player->hasBlackJack()) {
                $player->adjustBalance($player->getBalance() * 1.5);
                $player->setStatus('done');
            }
        }

        $this->addCardToPlayer($bank, $deck);
        $this->addCardToPlayer($bank, $deck);

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * Handle the 'hit' action for a player.
     *
     * @Route("/hit/{playerIndex}", name="game_hit")
     *
     * @param int $playerIndex The index of the player in the session.
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     *
     * @throws LogicException If the player index is invalid or the session data is corrupted.
     */

    #[Route("/hit/{playerIndex}", name: "game_hit")]
    public function hit(int $playerIndex, SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        $players = $session->get('players');
        $bank = $session->get('bank');

        $player = $players[$playerIndex] ?? null;
        if (!$player instanceof Player) {
            throw new LogicException('Invalid player index.');
        }

        $this->addCardToPlayer($player, $deck);

        if ($player->isBusted()) {
            $bank->adjustBalance($player->getBalance());
            $player->adjustBalance(-$player->getBalance());
            $player->setStatus('done');
        }

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);

        if ($this->areAllPlayersDone($players)) {
            return $this->redirectToRoute('game_dealer');
        }

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }


    /**
     * Handle the 'stay' action for a player.
     *
     * @Route("/stay/{playerIndex}", name="game_stay")
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */


    #[Route("/stay/{playerIndex}", name: "game_stay")]
    public function stay(int $playerIndex, SessionInterface $session): Response
    {
        $players = $session->get('players');
        $bank = $session->get('bank');


        $player = $players[$playerIndex];
        $player->setStatus('done');

        $session->set('players', $players);

        if ($this->areAllPlayersDone($players)) {
            return $this->redirectToRoute('game_dealer');
        }

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * Handle the dealer's actions and determine the outcome of the game.
     *
     * @Route("/dealer", name="game_dealer")
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */

    #[Route("/dealer", name: "game_dealer")]
    public function dealer(SessionInterface $session): Response
    {
        $deck = $session->get('deck');
        $players = $session->get('players');
        $bank = $session->get('bank');

        while ($bank->getHandValue() < 17) {
            $this->addCardToPlayer($bank, $deck);
        }

        if ($bank->isBusted()) {
            foreach ($players as $player) {
                if (!$player->isBusted()) {
                    $player->adjustBalance($player->getBalance());
                }
            }
        } else {
            foreach ($players as $player) {
                if (!$player->isBusted()) {
                    if ($player->getHandValue() > $bank->getHandValue()) {
                        $player->adjustBalance($player->getBalance());
                    } else {
                        $bank->adjustBalance($player->getBalance());
                        $player->adjustBalance(-$player->getBalance());
                    }
                }
            }
        }

        $session->set('deck', $deck);
        $session->set('players', $players);
        $session->set('bank', $bank);
        $this->addFlash('success', 'The Round is over!!');

        return $this->render('black-jack/home.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * @param Player[] $players
     */
    private function areAllPlayersDone(array $players): bool
    {
        foreach ($players as $player) {
            if ($player->getStatus() !== 'done') {
                return false;
            }
        }
        return true;
    }

    /**
     * Check if all players are done with their actions.
     *
     *
     * @return void.
     */

    private function addCardToPlayer(Player $player, DeckOfCards $deck): void
    {
        $card = $deck->drawCard();
        if (!$card instanceof Card) {
            throw new LogicException('Failed to draw a card from the deck.');
        }
        $player->addCard($card);
    }

}

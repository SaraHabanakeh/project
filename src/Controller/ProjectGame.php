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
class ProjectGame extends AbstractController
{
    #[Route("/proj", name: "proj_start")]
    public function start(): Response
    {
        return $this->render("project/proj.html.twig");
    }

    /**
     * Render about page that include an intro about the project/game and its rules.
     * @Route("/proj/about", name="proj_about")
     *
     * @return Response
     */
    #[Route("/proj/about", name: "proj_about")]
    public function about(): Response
    {
        return $this->render("project/about.html.twig");
    }

    /**
    * Render the players form to choose how many players will play.
    * @Route("proj/players", name="proj_players")
    *
    * @return Response
    */
    #[Route("/proj/players", name: "proj_players", methods: ["GET","POST"])]
    public function choosePlayers(): Response
    {
        return $this->render("project/players.html.twig");
    }

    /**
     * Render the setup form for starting the game, where players enter their names and balance.
     * @Route("proj/setup", name="proj_setup")
     *
     * @return Response
     */
    #[Route("/proj/setup", name: "proj_setup", methods: ["GET","POST"])]
    public function setup(Request $request): Response
    {
        $numberOfPlayers = $request->request->get('number_of_players');
        return $this->render("project/setup.html.twig", [
            'number_of_players' => $numberOfPlayers
        ]);
    }


    /**
     * Render the api tamplate that include 5 api routes.
     * @Route("proj/api", name="proj_api")
     *
     * @return Response
     */
    #[Route('/proj/api', name:'proj_api')]
    public function api(): Response
    {
        return $this->render('project/api.html.twig');
    }

    /**
     * Start the game with the given players.
     * @Route("/proj/playt", name="proj_play", methods={"POST"})
     *
     * @param Request $request The HTTP request object.
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */
    #[Route("/proj/play", name: "proj_play", methods: ["GET", "POST"])]
    public function play(Request $request, SessionInterface $session): Response
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

        return $this->render('project/play.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }


    /**
     * Handle the 'hit' action for a player.
     * @Route("proj/hit/{playerIndex}", name="proj_hit")
     *
     * @param int $playerIndex The index of the player in the session.
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     *
     * @throws LogicException If the player index is invalid or the session data is corrupted.
     */

    #[Route("proj/hit/{playerIndex}", name: "proj_hit")]
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
            return $this->redirectToRoute('proj_dealer');
        }

        return $this->render('project/play.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }


    /**
     * Handle the 'stay' action for a player.
     * @Route("proj/stay/{playerIndex}", name="proj_stay")
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */


    #[Route("proj/stay/{playerIndex}", name: "proj_stay")]
    public function stay(int $playerIndex, SessionInterface $session): Response
    {
        $players = $session->get('players');
        $bank = $session->get('bank');


        $player = $players[$playerIndex];
        $player->setStatus('done');

        $session->set('players', $players);

        if ($this->areAllPlayersDone($players)) {
            return $this->redirectToRoute('proj_dealer');
        }

        return $this->render('project/play.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * Handle the dealer's actions and determine the outcome of the game.
     *
     * @Route("/dealer", name="proj_dealer")
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */

    #[Route("proj/dealer", name: "proj_dealer")]
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

        return $this->render('project/play.html.twig', [
            'players' => $players,
            'bank' => $bank
        ]);
    }

    /**
     * Reset the game by clearing the session.
     *
     * @Route("/proj/reset", name="proj_reset", methods={"POST"})
     *
     * @param SessionInterface $session The session interface.
     *
     * @return Response
     */
    #[Route("/proj/reset", name: "proj_reset", methods: ["POST"])]
    public function reset(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute("proj_players");
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

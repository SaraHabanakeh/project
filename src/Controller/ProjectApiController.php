<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\Card\Card;
use App\Card\CardHand;
use App\Card\CardGraphic;


use LogicException;

/**
 * Controller for managing API endpoints for various functionalities.
 */
class ProjectApiController
{
    /**
     * Get a short intro about BLACKJACK game.
     *
     * @Route("proj/api/intro", name="api_intro")
     *
     * @return Response
     */
    #[Route("proj/api/intro", name: "api_intro")]
    public function game(): Response
    {
        $intro = [
            "Blackjack Game är ett spännande kortspel där tre spelare tävlar mot banken för att nå närmast 21 utan att gå över. Blackjack, ett av världens mest kända casinospel, där varje spelare står inför utmaningen att slå banken och uppnå den perfekta handen.",
        ];
        $jsonResponse = json_encode($intro, JSON_UNESCAPED_UNICODE);

        return new JsonResponse($jsonResponse, Response::HTTP_OK, [], true);
    }

    /**
     * Get the value of a specific number regarding on blackjack game.
     *
     * @Route("proj/values/{num}", name="api_values")
     *
     * @return Response
     */
    #[Route("proj/api/values/{num}", name: "api_values", methods: ['POST', 'GET'])]
    public function values(int $num): Response
    {
        $card = new Card('hearts', $num);
        $value = $card->cardValue();

        return new JsonResponse(['value' => $value], Response::HTTP_OK);
    }

    /**
     * Get the Explenation about 'BUST'.
     *
     * @Route("proj/api/bust", name="api_bust")
     *
     * @return Response
     */
    #[Route("proj/api/bust", name: "api_bust")]
    public function bust(): Response
    {
        $bustMessage = "Spelaren blir 'Busted' om sin total hand värde är > 21, banken tar sin insats";


        $card1 = new CardGraphic('heart', 12);
        $card2 = new CardGraphic('clover', 10);
        $card3 = new CardGraphic('heart', 3);


        $hand = new CardHand();
        $hand->addCard($card1);
        $hand->addCard($card2);
        $hand->addCard($card3);


        $representations = [];
        foreach ($hand->toArray() as $card) {
            $representations[] = $card['string_representation'];
        }


        $data = [
            'Bust Explanation' => $bustMessage,
            'Exemple:' => $representations
        ];


        $jsonResponse = json_encode($data, JSON_UNESCAPED_UNICODE);


        return new JsonResponse($jsonResponse, Response::HTTP_OK, [], true);
    }

    /**
     * Get the definition about the term 'BLACKJACK' .
     *
     * @Route("proj/api/blackjack", name="api_blackjack")
     *
     * @return Response
     */
    #[Route("proj/api/blackjack", name: "api_blackjack")]
    public function blackjack(): Response
    {
        $blackMessage = "Spelaren får 'Black Jack' om sin total hand värde är 21, vinner 1.5 sin insats.";


        $card1 = new CardGraphic('heart', 1);
        $card2 = new CardGraphic('clover', 11);


        $hand = new CardHand();
        $hand->addCard($card1);
        $hand->addCard($card2);


        $representations = [];
        foreach ($hand->toArray() as $card) {
            $representations[] = $card['string_representation'];
        }


        $data = [
            'BlackJack Explanation' => $blackMessage,
            'Exemple:' => $representations
        ];


        $jsonResponse = json_encode($data, JSON_UNESCAPED_UNICODE);


        return new JsonResponse($jsonResponse, Response::HTTP_OK, [], true);
    }

    /**
     * Get the Game rules .
     *
     * @Route("proj/api/rules", name="api_rules")
     *
     * @return Response
     */
    #[Route("proj/api/rules", name: "api_rules")]
    public function rule(): Response
    {
        $rules = [
            "spelaren kan välja att:'Hit': Ta ett till kort.'Stay': Behålla sin nuvarande hand och avsluta sin tur.När alla spelare har valt 'Stay' är det dealerns tur. Dealern drar kort tills handen är värd minst 17. Om dealerns hand överstiger 21 blir dealern 'busted' och förlorar automatiskt mot alla spelare som inte är 'busted', de får dubblasina insats. Om dealerns hand är under 21, får alla spelare som har högre handvärde än dealern dubbla sin insats. Spelare som har lägre handvärde förlorar sin insats. Om dealern har högre handvärde än alla spelare, vinner dealern och får alla spelares insatser.",
        ];
        $jsonResponse = json_encode($rules, JSON_UNESCAPED_UNICODE);

        return new JsonResponse($jsonResponse, Response::HTTP_OK, [], true);
    }
}

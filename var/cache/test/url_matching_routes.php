<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/quote' => [[['_route' => 'api-quote', '_controller' => 'App\\Controller\\ApiController::getDailyQuote'], null, null, null, false, false, null]],
        '/api/deck' => [[['_route' => 'api-deck', '_controller' => 'App\\Controller\\ApiController::getDeck'], null, null, null, false, false, null]],
        '/api/deck/shuffle' => [[['_route' => 'api-shuffle', '_controller' => 'App\\Controller\\ApiController::getShuffleCards'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/api/game' => [[['_route' => 'api_game', '_controller' => 'App\\Controller\\ApiController::apiGame'], null, null, null, false, false, null]],
        '/game/reset' => [[['_route' => 'game_reset', '_controller' => 'App\\Controller\\BlackJackGame::reset'], null, ['POST' => 0], null, false, false, null]],
        '/game' => [[['_route' => 'game-page', '_controller' => 'App\\Controller\\BlackJackGame::home'], null, null, null, true, false, null]],
        '/game/doc' => [[['_route' => 'game-doc', '_controller' => 'App\\Controller\\BlackJackGame::doc'], null, null, null, false, false, null]],
        '/setup' => [[['_route' => 'game_setup', '_controller' => 'App\\Controller\\BlackJackGame::setup'], null, null, null, false, false, null]],
        '/start' => [[['_route' => 'game_start', '_controller' => 'App\\Controller\\BlackJackGame::start'], null, ['POST' => 0], null, false, false, null]],
        '/dealer' => [[['_route' => 'game_dealer', '_controller' => 'App\\Controller\\BlackJackGame::dealer'], null, null, null, false, false, null]],
        '/library' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::index'], null, null, null, true, false, null]],
        '/library/create' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::create'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'show_books', '_controller' => 'App\\Controller\\BookController::apiIndex'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session_debug', '_controller' => 'App\\Controller\\CardGameController::showSession'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\CardGameController::deleteSession'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_start', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::showDeck'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_draw', '_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'me', '_controller' => 'App\\Controller\\PresentationController::presentation'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\PresentationController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\PresentationController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\PresentationController::lucky'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'code_metrics', '_controller' => 'App\\Controller\\PresentationController::metrics'], null, null, null, true, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\PresentationController::api'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|deck/draw/([^/]++)(*:33)'
                    .'|library/book/([^/]++)(*:61)'
                .')'
                .'|/hit/([^/]++)(*:82)'
                .'|/stay/([^/]++)(*:103)'
                .'|/library/(?'
                    .'|([^/]++)(*:131)'
                    .'|edit/([^/]++)(*:152)'
                    .'|delete/([^/]++)(*:175)'
                .')'
                .'|/card/deck/draw/([^/]++)(*:208)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'api_draw_cards', '_controller' => 'App\\Controller\\ApiController::drawCards'], ['number'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        61 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BookController::apiShow'], ['isbn'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'game_hit', '_controller' => 'App\\Controller\\BlackJackGame::hit'], ['playerIndex'], null, null, false, true, null]],
        103 => [[['_route' => 'game_stay', '_controller' => 'App\\Controller\\BlackJackGame::stay'], ['playerIndex'], null, null, false, true, null]],
        131 => [[['_route' => 'show_book', '_controller' => 'App\\Controller\\BookController::show'], ['title'], null, null, false, true, null]],
        152 => [[['_route' => 'edit_book', '_controller' => 'App\\Controller\\BookController::edit'], ['title'], null, null, false, true, null]],
        175 => [[['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['title'], null, null, false, true, null]],
        208 => [
            [['_route' => 'card_draw_number', '_controller' => 'App\\Controller\\CardGameController::drawMultipleCards'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

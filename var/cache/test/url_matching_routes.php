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
        '/library' => [[['_route' => 'app_book', '_controller' => 'App\\Controller\\BookController::book'], null, null, null, true, false, null]],
        '/library/create' => [[['_route' => 'book_new', '_controller' => 'App\\Controller\\BookController::new'], null, null, null, false, false, null]],
        '/api/library/books' => [[['_route' => 'show_books', '_controller' => 'App\\Controller\\BookController::showAllBook'], null, null, null, false, false, null]],
        '/session' => [[['_route' => 'session_debug', '_controller' => 'App\\Controller\\CardGameController::showSession'], null, null, null, false, false, null]],
        '/session/delete' => [[['_route' => 'session_delete', '_controller' => 'App\\Controller\\CardGameController::deleteSession'], null, null, null, false, false, null]],
        '/card' => [[['_route' => 'card_start', '_controller' => 'App\\Controller\\CardGameController::home'], null, null, null, false, false, null]],
        '/card/deck' => [[['_route' => 'card_deck', '_controller' => 'App\\Controller\\CardGameController::test'], null, null, null, false, false, null]],
        '/card/deck/shuffle' => [[['_route' => 'card_shuffle', '_controller' => 'App\\Controller\\CardGameController::shuffleDeck'], null, null, null, false, false, null]],
        '/card/deck/draw' => [[['_route' => 'card_draw', '_controller' => 'App\\Controller\\CardGameController::drawCardDeck'], null, null, null, false, false, null]],
        '/game/pig' => [[['_route' => 'pig_start', '_controller' => 'App\\Controller\\DiceGameController::home'], null, null, null, false, false, null]],
        '/game/pig/test/roll' => [[['_route' => 'test_roll_dice', '_controller' => 'App\\Controller\\DiceGameController::testRollDice'], null, null, null, false, false, null]],
        '/game/pig/init' => [
            [['_route' => 'pig_init_get', '_controller' => 'App\\Controller\\DiceGameController::init'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'pig_init_post', '_controller' => 'App\\Controller\\DiceGameController::initCallback'], null, ['POST' => 0], null, false, false, null],
        ],
        '/game/pig/play' => [[['_route' => 'pig_play', '_controller' => 'App\\Controller\\DiceGameController::play'], null, ['GET' => 0], null, false, false, null]],
        '/game/pig/roll' => [[['_route' => 'pig_roll', '_controller' => 'App\\Controller\\DiceGameController::roll'], null, ['POST' => 0], null, false, false, null]],
        '/game/pig/save' => [[['_route' => 'pig_save', '_controller' => 'App\\Controller\\DiceGameController::save'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'me', '_controller' => 'App\\Controller\\PresentationController::presentation'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about', '_controller' => 'App\\Controller\\PresentationController::about'], null, null, null, false, false, null]],
        '/report' => [[['_route' => 'report', '_controller' => 'App\\Controller\\PresentationController::report'], null, null, null, false, false, null]],
        '/lucky' => [[['_route' => 'lucky', '_controller' => 'App\\Controller\\PresentationController::lucky'], null, null, null, false, false, null]],
        '/metrics' => [[['_route' => 'code_metrics', '_controller' => 'App\\Controller\\PresentationController::metrics'], null, null, null, true, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\PresentationController::api'], null, null, null, false, false, null]],
        '/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, null, null, false, false, null]],
        '/product/create' => [[['_route' => 'product_create', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, null, null, false, false, null]],
        '/product/show' => [[['_route' => 'product_show_all', '_controller' => 'App\\Controller\\ProductController::showAllProduct'], null, null, null, false, false, null]],
        '/product/view' => [[['_route' => 'product_view_all', '_controller' => 'App\\Controller\\ProductController::viewAllProduct'], null, null, null, false, false, null]],
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
                .'|/game/pig/test/(?'
                    .'|roll/(\\d+)(*:244)'
                    .'|dicehand/(\\d+)(*:266)'
                .')'
                .'|/product/(?'
                    .'|show/(?'
                        .'|([^/]++)(*:303)'
                        .'|min/([^/]++)(*:323)'
                    .')'
                    .'|update/([^/]++)/([^/]++)(*:356)'
                    .'|view/([^/]++)(*:377)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        33 => [[['_route' => 'api_draw_cards', '_controller' => 'App\\Controller\\ApiController::drawCards'], ['number'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        61 => [[['_route' => 'book_by_isbn', '_controller' => 'App\\Controller\\BookController::showBookByIsbn'], ['isbn'], ['GET' => 0], null, false, true, null]],
        82 => [[['_route' => 'game_hit', '_controller' => 'App\\Controller\\BlackJackGame::hit'], ['playerIndex'], null, null, false, true, null]],
        103 => [[['_route' => 'game_stay', '_controller' => 'App\\Controller\\BlackJackGame::stay'], ['playerIndex'], null, null, false, true, null]],
        131 => [[['_route' => 'show_book', '_controller' => 'App\\Controller\\BookController::showBook'], ['title'], null, null, false, true, null]],
        152 => [[['_route' => 'edit_book', '_controller' => 'App\\Controller\\BookController::edit'], ['title'], null, null, false, true, null]],
        175 => [[['_route' => 'delete_book', '_controller' => 'App\\Controller\\BookController::delete'], ['title'], null, null, false, true, null]],
        208 => [[['_route' => 'card_draw_number', '_controller' => 'App\\Controller\\CardGameController::drawCardNum'], ['num'], null, null, false, true, null]],
        244 => [[['_route' => 'test_roll_num_dices', '_controller' => 'App\\Controller\\DiceGameController::testRollDices'], ['num'], null, null, false, true, null]],
        266 => [[['_route' => 'test_dicehand', '_controller' => 'App\\Controller\\DiceGameController::testDiceHand'], ['num'], null, null, false, true, null]],
        303 => [[['_route' => 'product_by_id', '_controller' => 'App\\Controller\\ProductController::showProductById'], ['id'], null, null, false, true, null]],
        323 => [[['_route' => 'product_by_min_value', '_controller' => 'App\\Controller\\ProductController::showProductByMinimumValue'], ['value'], null, null, false, true, null]],
        356 => [[['_route' => 'product_update', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['id', 'value'], null, null, false, true, null]],
        377 => [
            [['_route' => 'product_view_minimum_value', '_controller' => 'App\\Controller\\ProductController::viewProductWithMinimumValue'], ['value'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];

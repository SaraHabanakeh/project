<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DiceGameControllerTest extends WebTestCase
{
    public function testHome(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig');
        $this->assertResponseIsSuccessful();
    }

    public function testTestRollDice(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/roll');
        $this->assertResponseIsSuccessful();
    }

    public function testTestRollNumDices(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/roll/5');
        $this->assertResponseIsSuccessful();
    }

    public function testTestDiceHand(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/test/dicehand/5');
        $this->assertResponseIsSuccessful();
    }

    public function testInit(): void
    {
        $client = static::createClient();

        $client->request('GET', '/game/pig/init');
        $this->assertResponseIsSuccessful();
    }

    public function testInitCallback(): void
    {
        $client = static::createClient();

        $client->request('POST', '/game/pig/init', ['num_dices' => 5]);
        $this->assertResponseRedirects('/game/pig/play');
    }

}

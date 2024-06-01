<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CardGameControllerTest extends WebTestCase
{
    public function testShowSession(): void
    {
        $client = static::createClient();

        $client->request('GET', '/session');
        $this->assertResponseIsSuccessful();
    }

    public function testDeleteSession(): void
    {
        $client = static::createClient();

        $client->request('GET', '/session/delete');
        $this->assertResponseRedirects('/session', 302);
    }

    public function testHome(): void
    {
        $client = static::createClient();

        $client->request('GET', '/card');
        $this->assertResponseIsSuccessful();
    }

    public function testTest(): void
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck');
        $this->assertResponseIsSuccessful();
    }

    public function testShuffleDeck(): void
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/shuffle');
        $this->assertResponseIsSuccessful();
    }

    public function testDrawCardDeck(): void
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/draw');
        $this->assertResponseIsSuccessful();
    }

    public function testDrawCardNum(): void
    {
        $client = static::createClient();

        $client->request('GET', '/card/deck/draw/5');
        $this->assertResponseIsSuccessful();
    }
}

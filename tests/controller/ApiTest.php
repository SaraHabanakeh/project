<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ApiControllerTest extends WebTestCase
{
    public function testGetDailyQuote(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/quote');

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertJson((string) $client->getResponse()->getContent());
    }

    public function testGetDeck(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/deck');

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertJson((string) $client->getResponse()->getContent());
    }

    public function testShuffleDeck(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/deck/shuffle');

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertJson((string) $client->getResponse()->getContent());
    }

    public function testDrawCards(): void
    {
        $client = static::createClient();

        $client->request('GET', '/api/deck/draw/5');

        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(200);
        $this->assertJson((string) $client->getResponse()->getContent());
    }

}

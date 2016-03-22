<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AtoZControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        // Happy path
        $crawler = $client->request('GET', '/a-z/b');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertContains('This is an A to Z listing of programmes', $crawler->filter('.container h1')->text());
        $this->assertContains('Current letter: B', $crawler->filter('.container h2')->text());
        $this->assertCount(20, $crawler->filter('.azlist__item'));


        // Unhappy path
        $crawler = $client->request('GET', '/a-z/bb');
        $this->assertContains('Sorry, there are no programmes under this letter.', $crawler->filter('.message')->text());
    }
}

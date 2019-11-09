<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class Site2ControllerTest extends WebTestCase
{
    public function testAcceuil()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/acceuil');
    }

    public function testService()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/service');
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

}

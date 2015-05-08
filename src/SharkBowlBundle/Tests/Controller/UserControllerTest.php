<?php

namespace SharkBowlBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
    public function testCreate()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'user');
    }

    public function testEdit()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'user/*');
    }

}

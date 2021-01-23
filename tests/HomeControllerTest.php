<?php

namespace App\Test;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{
    /**
     * @dataProvider provide
     * @param string $uri
     */
    public function test(string $uri)
    {
        $client = static::createClient();

        $client->request(Request::METHOD_GET, $uri);

        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
<?php

declare(strict_types=1);

namespace Framework\Http;

use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    public function testEmpty(): void
    {
        $response = new Response($body = 'boby');

        self::assertEquals($body, $response->getBody()->getContents());
        self::assertEquals(200, $response->getStatusCode());
        self::assertEquals("OK", $response->getReasonPhrase());
    }

    public function test404(): void
    {
        $response = new Response($body = 'Empty', $status = 404);

        self::assertEquals($body, $response->getBody()->getContents());
        self::assertEquals($status, $response->getStatusCode());
        self::assertEquals("Not Found", $response->getReasonPhrase());
    }

    public function testHeaders(): void
    {
        $response = (new Response(""))
                        ->withHeaders($name1 = 'X-Header-1', $value1 = 'value_1')
                        ->withHeaders($name2 = 'X-Header-2', $value2 = 'value_2');

        self::assertEquals([$name1 => $value1, $name2 => $value2], $response->getHeaders());
    }
}
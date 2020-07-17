<?php

declare(strict_types=1);

namespace Tests\Framework\Http;

use Framework\Http\Request;
use PHPUnit\Framework\TestCase;

class RequestTest extends TestCase
{
    public function testEmpty(): void
    {
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testGetQueryParams(): void
    {
        $request = (new Request())->withQueryParams($data = [
            "name" => 'John',
            "age" => '28'
        ]);

        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testGetParsedBodyTest(): void
    {

        $request = (new Request())->withParsedBody($data = [
            "name" => 'John'
        ]);

        self::assertEquals([], $request->getQueryParams());
        self::assertEquals($data, $request->getParsedBody());
    }
}
<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\ValueObject;

use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Exception\BodyTooShort;
use Tests\TestCase;

class BodyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateATitle()
    {
        $expectedTitle = 'TITLa war gfrea gea geag rs sr tsE';

        $body = new Body($expectedTitle);

        $this->assertEquals($expectedTitle, (string) $body);
        $this->assertTrue($body->isEqual(new Body($expectedTitle)));
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldRaiseTitleTooShortException()
    {
        $this->expectException(BodyTooShort::class);

        new Body('adsfs');
    }
}

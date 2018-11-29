<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\TitleTooShort;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class TitleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateATitle()
    {
        $expectedTitle = 'TITLa war gfrea gea geag rs sr tsE';

        $title = new Title($expectedTitle);

        $this->assertEquals($expectedTitle, (string) $title);
        $this->assertTrue($title->isEqual(new Title($expectedTitle)));
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldRaiseTitleTooShortException()
    {
        $this->expectException(TitleTooShort::class);

        new Title('adsfs');
    }
}

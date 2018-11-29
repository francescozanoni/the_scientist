<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article\UseCase\ListArticles;

use LaravelDay\Article\UseCase\ListArticles\ListArticles;
use Tests\TestCase;

class ListArticlesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldListArticles()
    {
        $handler = new ListArticles();

        $expected = [
            [
                'title' => 'MY TITLE',
                'body' => 'THIS IS MY BODY',
                'creationDate' => '2018-11-12 00:00:00',
            ],
        ];
        $data = $handler();

        $this->assertEquals($expected, $data);
    }
}

<?php

declare(strict_types=1);

namespace Tests\Feature;

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
        $response = $this->get('api/articles');

        $response->assertStatus(200);
        $response->assertJson([
            [
                'title' => 'MY TITLE',
                'body' => 'THIS IS MY BODY',
                'creationDate' => '2018-11-12 00:00:00',
            ],
        ]);
    }
}

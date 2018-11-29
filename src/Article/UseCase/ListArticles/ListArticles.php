<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Francesco.Zanoni
 * Date: 29/11/2018
 * Time: 15:03.
 */

namespace LaravelDay\Article\UseCase\ListArticles;

class ListArticles
{
    public function __invoke(): array
    {
        return [
            [
                'title' => 'MY TITLE',
                'body' => 'THIS IS MY BODY',
                'creationDate' => '2018-11-12 00:00:00',
            ],
        ];
    }
}

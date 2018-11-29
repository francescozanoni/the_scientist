<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\Article;

use LaravelDay\Article\Article;
use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Title;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateAnArticle()
    {
        $id = 1;
        $title = new Title('MY zsfdvdzbvf dfda fd fds f');
        $body = new Body('asdfcdwa fcwafcarfca gfcaergfcafcdsafads ');
        $creationDate = new \DateTimeImmutable();

        $article = new Article($id, $title, $body, $creationDate);
        $this->assertSame($id, $article->getId());
        $this->assertSame($title, $article->getTitle());
        $this->assertSame($body, $article->getBody());
        $this->assertSame($creationDate, $article->getCreationDate());
    }
}

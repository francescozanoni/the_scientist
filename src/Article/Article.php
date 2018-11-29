<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Francesco.Zanoni
 * Date: 29/11/2018
 * Time: 15:17.
 */

namespace LaravelDay\Article;

use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Title;

/**
 * Class Article.
 */
final class Article
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var Title
     */
    private $title;

    /**
     * @var Body
     */
    private $body;

    /**
     * @var \Datetime
     */
    private $creationDate;

    /**
     * Article constructor.
     *
     * @param int                $id
     * @param Title              $title
     * @param Body               $body
     * @param \DateTimeImmutable $creationDate
     */
    public function __construct(int $id, Title $title, Body $body, \DateTimeImmutable $creationDate)
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->creationDate = $creationDate;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return Title
     */
    public function getTitle(): Title
    {
        return $this->title;
    }

    /**
     * @return Body
     */
    public function getBody(): Body
    {
        return $this->body;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreationDate(): \DateTimeImmutable
    {
        return $this->creationDate;
    }

    // non ci sono setter per id, title, body e creationDate,
    // quindi sono inputtabili solo mediante il costruttore
}

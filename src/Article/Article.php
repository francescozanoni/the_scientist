<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Francesco.Zanoni
 * Date: 29/11/2018
 * Time: 15:17.
 */

namespace LaravelDay\Article;

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
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $body;

    /**
     * @var \Datetime
     */
    private $creationDate;

    /**
     * Article constructor.
     *
     * @param int       $id
     * @param string    $title
     * @param string    $body
     * @param \DateTime $creationDate
     */
    public function __construct(int $id, string $title, string $body, \DateTimeImmutable $creationDate)
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
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getCreationDate(): string
    {
        return $this->creationDate;
    }

    // non ci sono setter per id, title, body e creationDate,
    // quindi sono inputtabili solo mediante il costruttore
}

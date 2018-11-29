<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Francesco.Zanoni
 * Date: 29/11/2018
 * Time: 16:09.
 */

namespace LaravelDay\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\TitleTooShort;

final class Title
{
    /**
     * @var string
     */
    private $title;

    public function __construct(string $title)
    {
        if (\mb_strlen($title) < 10) {
            throw new TitleTooShort('Too short title');
        }

        $this->title = $title;
    }

    public function isEqual(self $title)
    {
        return (string) $title === $title->__toString();
    }

    public function __toString()
    {
        return $this->title;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

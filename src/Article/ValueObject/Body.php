<?php

declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Francesco.Zanoni
 * Date: 29/11/2018
 * Time: 16:09.
 */

namespace LaravelDay\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\BodyTooShort;

final class Body
{
    /**
     * @var string
     */
    private $body;

    public function __construct(string $body)
    {
        if (\mb_strlen($body) < 20) {
            throw new BodyTooShort('Too short body');
        }

        $this->body = $body;
    }

    public function isEqual(self $body)
    {
        return (string) $body === $body->__toString();
    }

    public function __toString()
    {
        return $this->body;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}

<?php

namespace EscCompany\GoodCodeParser\Parsers;

use EscCompany\GoodCodeParser\Contracts\Parser;
use InvalidArgumentException;

final class ComplexGood implements Parser
{
    const PREFIX = 'com';

    /**
     * {@inheritDoc}
     */
    public static function parse(string $code, $goods = null)
    {
        if (is_null($goods)) {
            throw new InvalidArgumentException(__METHOD__);
        }

        $key = preg_replace('/^' . self::PREFIX . '/i', '', $code);

        return $goods[$key];
    }
}

<?php

namespace Linio;

/**
 * Trait ProgramMultiples
 * @package Linio
 */
trait ProgramMultiples
{
    /**
     * @param int $number
     * @return bool
     */
    private function isThreeMultiple(int $number)
    {
        return $number % 3 === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isFiveMultiple(int $number)
    {
        return $number % 5 === 0;
    }
}

<?php

namespace Test\Linio\Helper;

use Linio\Program;

/**
 *
 * Trait ProgramAssertThree
 * @package Test\Linio
 */
trait ProgramAssertFive
{
    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertFive(int $number, string $value)
    {
        $this->assertItem($number, Program::FIVE, $value );
    }

    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertNotFive(int $number, string $value)
    {
        $this->assertNotItem($number, Program::FIVE, $value );
    }
}
<?php

namespace Test\Linio\Helper;

use Linio\Program;

/**
 * Trait ProgramAssertThree
 * @package Test\Linio
 */
trait ProgramAssertThreeAndFive
{
    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertThreeAndFive(int $number, string $value)
    {
        $this->assertItem($number, Program::THREE_AND_FIVE, $value);
    }

    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertNotThreeAndFive(int $number, string $value)
    {
        $this->assertNotItem($number, Program::THREE_AND_FIVE, $value);
    }
}
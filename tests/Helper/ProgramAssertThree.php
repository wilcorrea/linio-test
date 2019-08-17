<?php

namespace Test\Linio\Helper;

use Linio\Program;

/**
 * Trait ProgramAssertThree
 * @package Test\Linio
 */
trait ProgramAssertThree
{
    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertThree(int $number, string $value)
    {
        $this->assertItem($number, Program::THREE, $value);
    }

    /**
     * @param int $number
     * @param string $value
     */
    final protected function assertNotThree(int $number, string $value)
    {
        $this->assertNotItem($number, Program::THREE, $value);
    }
}
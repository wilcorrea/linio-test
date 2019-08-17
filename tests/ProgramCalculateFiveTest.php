<?php

namespace Test\Linio;

use Linio\Program;
use Test\Linio\Helper\ProgramAssertFive;

/**
 * Class ProgramCalculateFiveTest
 * @package Test\Linio
 */
class ProgramCalculateFiveTest extends ProgramTest
{
    /**
     * @trait ProgramAssertFive
     */
    use ProgramAssertFive;

    /**
     */
    public function testCalculateFive()
    {
        $program = new Program;
        $number = 95;
        $value = $program->calculate($number);
        $this->assertFive($number, $value);
    }

    /**
     */
    public function testCalculateNotFive()
    {
        $program = new Program;
        $number = 13;
        $value = $program->calculate($number);
        $this->assertNotFive($number, $value);
    }
}

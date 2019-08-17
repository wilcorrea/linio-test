<?php

namespace Test\Linio;

use Linio\Program;
use Test\Linio\Helper\ProgramAssertThreeAndFive;

/**
 * Class ProgramCalculateThreeAndFiveTest
 * @package Test\Linio
 */
class ProgramCalculateThreeAndFiveTest extends ProgramTest
{
    /**
     * @trait ProgramAssertThreeAndFive
     */
    use ProgramAssertThreeAndFive;

    /**
     */
    public function testCalculateFive()
    {
        $program = new Program;
        $number = 75;
        $value = $program->calculate($number);
        $this->assertThreeAndFive($number, $value);
    }

    /**
     */
    public function testCalculateNotFive()
    {
        $program = new Program;
        $number = 13;
        $value = $program->calculate($number);
        $this->assertNotThreeAndFive($number, $value);
    }
}

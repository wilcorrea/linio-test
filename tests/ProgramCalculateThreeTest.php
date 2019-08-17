<?php

namespace Test\Linio;

use Linio\Program;
use Test\Linio\Helper\ProgramAssertThree;

/**
 * Class ProgramCalculateThreeTest
 * @package Test\Linio
 */
class ProgramCalculateThreeTest extends ProgramTest
{
    /**
     * @trait ProgramAssertThree
     */
    use ProgramAssertThree;

    /**
     */
    public function testCalculateThree()
    {
        $program = new Program;
        $number = 39;
        $value = $program->calculate($number);
        $this->assertThree($number, $value);
    }

    /**
     */
    public function testCalculateNotThree()
    {
        $program = new Program;
        $number = 13;
        $value = $program->calculate($number);
        $this->assertNotThree($number, $value);
    }
}

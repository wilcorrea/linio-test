<?php

namespace Test\Linio;

use Linio\Program;
use Test\Linio\Helper\ProgramAssertFive;
use Test\Linio\Helper\ProgramAssertThree;
use Test\Linio\Helper\ProgramAssertThreeAndFive;

/**
 * Class ProgramRunTest
 * @package Test\Linio
 */
class ProgramRunTest extends ProgramTest
{
    /**
     * @trait ProgramAssertThreeAndFive
     */
    use ProgramAssertThreeAndFive;

    /**
     * @trait ProgramAssertThree
     */
    use ProgramAssertThree;

    /**
     * @trait ProgramAssertFive
     */
    use ProgramAssertFive;

    /**
     */
    public function testWithHundredNumbers()
    {
        $program = new Program;
        for ($number = 1; $number <= 100; $number++) {
            $three = $number % 3 === 0;
            $five = $number % 5 === 0;

            $value = $program->calculate($number);
            if ($three && $five) {
                $this->assertThreeAndFive($number, $value);
                continue;
            }
            if ($three) {
                $this->assertThree($number, $value);
                continue;
            }
            if ($five) {
                $this->assertFive($number, $value);
            }
        }
    }
}

<?php

namespace Test\Linio;

use Linio\Program;
use PHPUnit\Framework\TestCase;

/**
 * Class ProgramRunTest
 * @package Test\Linio
 */
class ProgramRunTest extends TestCase
{
    /**
     */
    public function setUp()
    {
        parent::setUp();

        self::displayAllErrors();
    }

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

    /**
     * @param int $number
     * @param string $value
     */
    private function assertThreeAndFive(int $number, string $value)
    {
        $this->assertItem($number, Program::THREE_AND_FIVE, $value);
    }

    /**
     * @param int $number
     * @param string $value
     */
    private function assertThree(int $number, string $value)
    {
        $this->assertItem($number, Program::THREE, $value);
    }

    /**
     * @param int $number
     * @param string $value
     */
    private function assertFive(int $number, string $value)
    {
        $this->assertItem($number, Program::FIVE, $value );
    }

    /**
     * @param int $number
     * @param string $expected
     * @param string $value
     */
    private function assertItem(int $number, string $expected, string $value)
    {
        $messages = [
            Program::THREE => "Number {$number} must be \$three'",
            Program::FIVE => "Number {$number} must be \$five'",
            Program::THREE_AND_FIVE => "Number {$number} must be \$three && \$five'",
        ];
        $this->assertEquals($expected, $value, $messages[$expected]);
    }

    /**
     */
    private static function displayAllErrors(): void
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
}

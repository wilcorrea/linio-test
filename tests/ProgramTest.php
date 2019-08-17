<?php

namespace Test\Linio;

use Linio\Program;
use PHPUnit\Framework\TestCase;

/**
 * Class ProgramTest
 * @package Test\Linio
 */
abstract class ProgramTest extends TestCase
{
    /**
     */
    public function setUp()
    {
        parent::setUp();

        self::displayAllErrors();
    }

    /**
     * @param int $number
     * @param string $expected
     * @param string $value
     */
    final protected function assertItem(int $number, string $expected, string $value)
    {
        $messages = [
            Program::THREE => "Number {$number} must be \$three'",
            Program::FIVE => "Number {$number} must be \$five'",
            Program::THREE_AND_FIVE => "Number {$number} must be \$three && \$five'",
        ];
        $this->assertEquals($expected, $value, $messages[$expected]);
    }

    /**
     * @param int $number
     * @param string $expected
     * @param string $value
     */
    final protected function assertNotItem(int $number, string $expected, string $value)
    {
        $messages = [
            Program::THREE => "Number {$number} must not be \$three'",
            Program::FIVE => "Number {$number} must not be \$five'",
            Program::THREE_AND_FIVE => "Number {$number} must not be \$three && \$five'",
        ];
        $this->assertNotEquals($expected, $value, $messages[$expected]);
    }

    /**
     */
    private static function displayAllErrors(): void
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
}

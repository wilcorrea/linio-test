<?php

namespace Linio;

/**
 * Class Program
 */
abstract class ProgramAbstract implements ProgramInterface
{
    /**
     * @param $number
     * @return int|string
     */
    abstract public function calculate(int $number): string;

    /**
     * @param int $max
     */
    final public function run(int $max = 100)
    {
        for ($number = 1; $number <= $max; $number++) {
            $this->output($this->calculate($number));
        }
    }

    /**
     * @param mixed $content
     */
    protected function output($content)
    {
        echo "{$content}", PHP_EOL;
    }
}

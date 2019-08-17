<?php

namespace Linio;

/**
 * Class Program
 * @package Linio
 */
class Program extends ProgramAbstract
{
    /**
     * @trait ProgramMultiples
     */
    use ProgramMultiples;

    /**
     * @var string
     */
    const THREE_AND_FIVE = 'Linianos';

    /**
     * @var string
     */
    const THREE = 'Linio';

    /**
     * @var string
     */
    const FIVE = 'IT';

    /**
     * @param $number
     * @return int|string
     */
    public function calculate(int $number): string
    {
        $three = $this->isThreeMultiple($number);
        $five = $this->isFiveMultiple($number);
        $options = [static::THREE_AND_FIVE => $three && $five, static::THREE => $three, static::FIVE => $five];
        foreach ($options as $output => $condition) {
            if ($condition === false) {
                continue;
            }
            return $output;
        }
        return (string)$number;
    }
}
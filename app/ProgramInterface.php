<?php

namespace Linio;

/**
 * Interface ProgramInterface
 * @package Linio
 */
interface ProgramInterface
{
    /**
     * @param int $max
     * @return mixed
     */
    public function run(int $max = 10);
}
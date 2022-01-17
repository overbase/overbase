<?php

namespace Overbase\Console;

use PHPUnit\Framework\TestCase;

class OverbaseApplicationTest extends TestCase
{

    public function testRun()
    {
        $app = new OverbaseApplication();
        $app->run();
        $this->assertTrue(true);
    }
}
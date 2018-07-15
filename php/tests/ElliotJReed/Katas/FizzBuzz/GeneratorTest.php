<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\Katas\FizzBuzz;

use PHPUnit\Framework\TestCase;
use ElliotJReed\Katas\FizzBuzz\Generator;

class GeneratorTest extends TestCase
{
    private $generator;

    public function setUp(): void
    {
        $this->generator = new Generator();
    }

    public function testItReturnsOneFirst(): void
    {
        $this->assertEquals('1', $this->generator->schedule());
    }
}

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

    public function testItReturnsOneAsFirstItem(): void
    {
        $this->assertEquals('1', $this->generator->schedule()[0]);
    }

    public function testItReturnsTwoAsSecondItem(): void
    {
        $this->assertEquals('2', $this->generator->schedule()[1]);
    }

    public function testItReturnsFizzAsThirdItem(): void
    {
        $this->assertEquals('Fizz', $this->generator->schedule()[2]);
    }

    public function testItReturnsBuzzAsFifthItem(): void
    {
        $this->assertEquals('Buzz', $this->generator->schedule()[4]);
    }

    public function testItReturnsFizzBuzzAsFifthteenthItem(): void
    {
        $this->assertEquals('FizzBuzz', $this->generator->schedule()[14]);
    }

    public function testItReturnsOneHundredListItems(): void
    {
        $this->assertCount(100, $this->generator->schedule());
    }
}

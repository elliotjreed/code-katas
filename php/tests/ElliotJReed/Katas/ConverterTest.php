<?php
declare(strict_types=1);

namespace Tests\ElliotJReed\Katas;

use ElliotJReed\Katas\RomanNumerals\Converter;
use PHPUnit\Framework\TestCase;

class ConverterTest extends TestCase
{
    /* @var Converter */
    private $converter;

    public function setUp(): void
    {
        $this->converter = new Converter();
    }

    public function testItThrowsExceptionOnArabicNumberZero(): void
    {
        $this->expectException('ElliotJReed\Katas\RomanNumerals\NoSymbolForZeroException');

        $this->converter->convert(0);
    }

    public function testItReturnsRomanNumeralIForArabicNumberOne(): void
    {
        $romanNumeral = $this->converter->convert(1);

        $this->assertEquals('I', $romanNumeral);
    }

    public function testItReturnsRomanNumeralIiForArabicNumberTwo(): void
    {
        $romanNumeral = $this->converter->convert(2);

        $this->assertEquals('II', $romanNumeral);
    }

    public function testItReturnsRomanNumeralIiiForArabicNumberThree(): void
    {
        $romanNumeral = $this->converter->convert(3);

        $this->assertEquals('III', $romanNumeral);
    }

    public function testItReturnsRomanNumeralIvForArabicNumberFour(): void
    {
        $romanNumeral = $this->converter->convert(4);

        $this->assertEquals('IV', $romanNumeral);
    }

    public function testItReturnsRomanNumeralVForArabicNumberFive(): void
    {
        $romanNumeral = $this->converter->convert(5);

        $this->assertEquals('V', $romanNumeral);
    }

    public function testItReturnsRomanNumeralViForArabicNumberSix(): void
    {
        $romanNumeral = $this->converter->convert(6);

        $this->assertEquals('VI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralViiForArabicNumberSeven(): void
    {
        $romanNumeral = $this->converter->convert(7);

        $this->assertEquals('VII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralViiiForArabicNumberEight(): void
    {
        $romanNumeral = $this->converter->convert(8);

        $this->assertEquals('VIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralIxForArabicNumberNine(): void
    {
        $romanNumeral = $this->converter->convert(9);

        $this->assertEquals('IX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXForArabicNumberTen(): void
    {
        $romanNumeral = $this->converter->convert(10);

        $this->assertEquals('X', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXiForArabicNumberEleven(): void
    {
        $romanNumeral = $this->converter->convert(11);

        $this->assertEquals('XI', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXiiForArabicNumberTwelve(): void
    {
        $romanNumeral = $this->converter->convert(12);

        $this->assertEquals('XII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXvForArabicNumberFifteen(): void
    {
        $romanNumeral = $this->converter->convert(15);

        $this->assertEquals('XV', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXvForArabicNumberNineteen(): void
    {
        $romanNumeral = $this->converter->convert(19);

        $this->assertEquals('XIX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXXForArabicNumberTwenty(): void
    {
        $romanNumeral = $this->converter->convert(20);

        $this->assertEquals('XX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXXIIIForArabicNumberTwentyThree(): void
    {
        $romanNumeral = $this->converter->convert(23);

        $this->assertEquals('XXIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXlForArabicNumberForty(): void
    {
        $romanNumeral = $this->converter->convert(40);

        $this->assertEquals('XL', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXlForArabicNumberFortyThree(): void
    {
        $romanNumeral = $this->converter->convert(43);

        $this->assertEquals('XLIII', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXlForArabicNumberFiftyNine(): void
    {
        $romanNumeral = $this->converter->convert(59);

        $this->assertEquals('LIX', $romanNumeral);
    }

    public function testItReturnsRomanNumeralXlForArabicNumberEightySeven(): void
    {
        $romanNumeral = $this->converter->convert(87);

        $this->assertEquals('LXXXVII', $romanNumeral);
    }
}

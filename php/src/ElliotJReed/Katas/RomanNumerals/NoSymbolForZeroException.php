<?php
declare(strict_types=1);

namespace ElliotJReed\Katas\RomanNumerals;

use Exception;
use Throwable;

class NoSymbolForZeroException extends Exception implements Throwable
{
    protected $message = 'The Romans did not have a symbol for zero.';
}

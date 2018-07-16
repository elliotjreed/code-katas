<?php
declare(strict_types=1);

namespace ElliotJReed\Katas\FizzBuzz;

class Generator
{
    public function schedule(): array
    {
        $list = [];
        for ($playerTurn = 1; $playerTurn <= 100; ++$playerTurn) {
            if ($this->isFizz($playerTurn) || $this->isBuzz($playerTurn)) {
                $list[] = $this->buildFizzBuzzWord($playerTurn);
            } else {
                $list[] = (string) $playerTurn;
            }
        }

        return $list;
    }

    private function buildFizzBuzzWord(int $playerTurn): string
    {
        $fizzBuzzWord = '';
        if ($this->isFizz($playerTurn)) {
            $fizzBuzzWord .= 'Fizz';
        }

        if ($this->isBuzz($playerTurn)) {
            $fizzBuzzWord .= 'Buzz';
        }

        return $fizzBuzzWord;
    }

    private function isFizz(int $playerTurn): bool
    {
        return $playerTurn % 3 === 0;
    }

    private function isBuzz($playerTurn): bool
    {
        return $playerTurn % 5 === 0;
    }
}

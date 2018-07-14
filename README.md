[![Build Status](https://travis-ci.org/elliotjreed/code-kata-roman-numerals.svg?branch=master)](https://travis-ci.org/elliotjreed/code-kata-roman-numerals) [![Coverage Status](https://coveralls.io/repos/github/elliotjreed/code-kata-roman-numerals/badge.svg?branch=master)](https://coveralls.io/github/elliotjreed/code-kata-roman-numerals?branch=master)

# Coding Katas

Coding katas are a fun way to learn a new programming language or improve your existing knowledge of a language.

Each 'Kata' is a puzzle of sorts to be solved using strict Test-Driven Development (TDD) techniques. That is to say, write your test first, it will fail; write the minimum amount of code required to get the test to pass; write another test, it will fail; refactor your code, writing the minimum amount of code required for the tests to pass.

This repository contains example solutions, project structures, and test framework configurations for various languages

Each language will have:

 - A unit testing framework;
 - Code coverage reporting (if your code coverage is not 100%, you have not done strict TDD!);
 - A code style linter to ensure consistency between Katas.

## Languages

 - PHP: [REAMDE](php/README.md)
 - Javascript: [REAMDE](javascript/README.md)

## Katas

### Roman Numerals

__"Write a converter to take a standard Arabic / decimal number and output the Roman Numeral."__

> The symbols are I, V, X, L, C, D, and M, standing respectively for 1, 5, 10, 50, 100, 500, and 1,000 in the Hindu-Arabic numeral system. A symbol placed after another of equal or greater value adds its value; e.g., II = 2 and LX = 60. A symbol placed before one of greater value subtracts its value; e.g., IV = 4, XL = 40, and CD = 400.

[Encyclopedia Britannica](https://www.britannica.com/topic/Roman-numeral)


#### Notes

Here's a quick reference for Roman Numerals:

|**1**|**2**|**3**|**4**|**5**|**6**|**7**|**8**|**9**|
|-----|-----|-----|-----|-----|-----|-----|-----|-----|
| I | II | III | IV | V | VI | VII | VIII | IX  |
|**10**|**20**|**30**|**40**|**50**|**60**|**70**|**80**|**90**|
| X | XX | XXX | XL | L | LX | LXX | LXXX | XC  |
|**100**|**200**|**300**|**400**|**500**|**600**|**700**|**800**|**900**|
| C | CC | CCC | CD | D | DC | DCC | DCCC | CM |

Also note that the Romans did not have a symbol for zero, so the Arabic `0` should output nothing (i.e. an empty string).
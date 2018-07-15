"""
Example function to convert Hindi/Arabic (decimal) integers to Roman Numerals,
implemented using Test-Driven Development (TDD) as a solution to a code kata.
"""
def convert_to_roman_numeral(number_to_convert):
    """
    Converts Hindi/Arabic (decimal) integers to Roman Numerals.

    Args:
        param1: Hindi/Arabic (decimal) integer.

    Returns:
        Roman Numeral, or an empty string for zero.
    """
    arabic_numbers = (1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1)
    roman_numerals = ('M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I')
    result = ""
    for index, arabic_number in enumerate(arabic_numbers):
        count = int(number_to_convert / arabic_number)
        result += roman_numerals[index] * count
        number_to_convert -= arabic_numbers[index] * count
    return result

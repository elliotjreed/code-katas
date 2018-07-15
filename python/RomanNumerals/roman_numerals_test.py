import unittest
import roman_numerals

class RomanNumeralsTest(unittest.TestCase):
    def test_empty_string_returned_for_arabic_number_zero(self):
        self.assertEqual("", roman_numerals.convert_to_roman_numeral(0))

    def test_it_should_return_an_empty_string_when_the_Arabic_number_is_1(self):
        self.assertEqual("I", roman_numerals.convert_to_roman_numeral(1))

    def test_it_should_return_Roman_Numeral_II_when_the_Arabic_number_is_2(self):
        self.assertEqual("II", roman_numerals.convert_to_roman_numeral(2))

    def test_it_should_return_Roman_Numeral_IV_when_the_Arabic_number_is_4(self):
        self.assertEqual("IV", roman_numerals.convert_to_roman_numeral(4))

    def test_it_should_return_Roman_Numeral_V_when_the_Arabic_number_is_5(self):
        self.assertEqual("V", roman_numerals.convert_to_roman_numeral(5))

    def test_it_should_return_Roman_Numeral_VI_when_the_Arabic_number_is_6(self):
        self.assertEqual("VI", roman_numerals.convert_to_roman_numeral(6))

    def test_it_should_return_Roman_Numeral_IX_when_the_Arabic_number_is_9(self):
        self.assertEqual("IX", roman_numerals.convert_to_roman_numeral(9))

    def test_it_should_return_Roman_Numeral_X_when_the_Arabic_number_is_10(self):
        self.assertEqual("X", roman_numerals.convert_to_roman_numeral(10))

    def test_it_should_return_Roman_Numeral_XI_when_the_Arabic_number_is_11(self):
        self.assertEqual("XI", roman_numerals.convert_to_roman_numeral(11))

    def test_it_should_return_Roman_Numeral_XIV_when_the_Arabic_number_is_14(self):
        self.assertEqual("XIV", roman_numerals.convert_to_roman_numeral(14))

    def test_it_should_return_Roman_Numeral_XXIII_when_the_Arabic_number_is_23(self):
        self.assertEqual("XXIII", roman_numerals.convert_to_roman_numeral(23))

    def test_it_should_return_Roman_Numeral_XL_when_the_Arabic_number_is_40(self):
        self.assertEqual("XL", roman_numerals.convert_to_roman_numeral(40))

    def test_it_should_return_Roman_Numeral_XLIII_when_the_Arabic_number_is_43(self):
        self.assertEqual("XLIII", roman_numerals.convert_to_roman_numeral(43))

    def test_it_should_return_Roman_Numeral_LIX_when_the_Arabic_number_is_59(self):
        self.assertEqual("LIX", roman_numerals.convert_to_roman_numeral(59))

    def test_it_should_return_Roman_Numeral_LXXXVII_when_the_Arabic_number_is_87(self):
        self.assertEqual("LXXXVII", roman_numerals.convert_to_roman_numeral(87))

    def test_it_should_return_Roman_Numeral_XCIX_when_the_Arabic_number_is_99(self):
        self.assertEqual("XCIX", roman_numerals.convert_to_roman_numeral(99))

    def test_it_should_return_Roman_Numeral_C_when_the_Arabic_number_is_100(self):
        self.assertEqual("C", roman_numerals.convert_to_roman_numeral(100))

    def test_it_should_return_Roman_Numeral_CXXI_when_the_Arabic_number_is_121(self):
        self.assertEqual("CXXI", roman_numerals.convert_to_roman_numeral(121))

    def test_it_should_return_Roman_Numeral_CCXXI_when_the_Arabic_number_is_221(self):
        self.assertEqual("CCXXI", roman_numerals.convert_to_roman_numeral(221))

    def test_it_should_return_Roman_Numeral_CDXXI_when_the_Arabic_number_is_421(self):
        self.assertEqual("CDXXI", roman_numerals.convert_to_roman_numeral(421))

    def test_it_should_return_Roman_Numeral_DXXI_when_the_Arabic_number_is_521(self):
        self.assertEqual("DXXI", roman_numerals.convert_to_roman_numeral(521))

    def test_it_should_return_Roman_Numeral_CMXXI_when_the_Arabic_number_is_921(self):
        self.assertEqual("CMXXI", roman_numerals.convert_to_roman_numeral(921))

    def test_it_should_return_Roman_Numeral_MCMXXI_when_the_Arabic_number_is_1921(self):
        self.assertEqual("MCMXXI", roman_numerals.convert_to_roman_numeral(1921))

    def test_it_should_return_Roman_Numeral_MMMMMMMCMXXI_when_the_Arabic_number_is_7921(self):
        self.assertEqual("MMMMMMMCMXXI", roman_numerals.convert_to_roman_numeral(7921))

if __name__ == '__main__':
    unittest.main()

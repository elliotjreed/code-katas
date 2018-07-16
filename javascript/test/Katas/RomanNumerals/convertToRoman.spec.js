import { describe, it } from 'mocha'
import { assert } from 'chai'
import convertToRoman from '../../../src/Katas/RomanNumerals/convertToRoman'

describe('RomanNumerals', () => {
  describe('Converter', () => {
    it('should return an empty string when the Arabic number is 0', () => {
      assert.equal(convertToRoman(0), '')
    })

    it('should return Roman Numeral I when the Arabic number is 1', () => {
      assert.equal(convertToRoman(1), 'I')
    })

    it('should return Roman Numeral II when the Arabic number is 2', () => {
      assert.equal(convertToRoman(2), 'II')
    })

    it('should return Roman Numeral IV when the Arabic number is 4', () => {
      assert.equal(convertToRoman(4), 'IV')
    })

    it('should return Roman Numeral V when the Arabic number is 5', () => {
      assert.equal(convertToRoman(5), 'V')
    })

    it('should return Roman Numeral VI when the Arabic number is 6', () => {
      assert.equal(convertToRoman(6), 'VI')
    })

    it('should return Roman Numeral IX when the Arabic number is 9', () => {
      assert.equal(convertToRoman(9), 'IX')
    })

    it('should return Roman Numeral X when the Arabic number is 10', () => {
      assert.equal(convertToRoman(10), 'X')
    })

    it('should return Roman Numeral XI when the Arabic number is 11', () => {
      assert.equal(convertToRoman(11), 'XI')
    })

    it('should return Roman Numeral XIV when the Arabic number is 14', () => {
      assert.equal(convertToRoman(14), 'XIV')
    })

    it('should return Roman Numeral XXIII when the Arabic number is 23', () => {
      assert.equal(convertToRoman(23), 'XXIII')
    })

    it('should return Roman Numeral XL when the Arabic number is 40', () => {
      assert.equal(convertToRoman(40), 'XL')
    })

    it('should return Roman Numeral XLIII when the Arabic number is 43', () => {
      assert.equal(convertToRoman(43), 'XLIII')
    })

    it('should return Roman Numeral LIX when the Arabic number is 59', () => {
      assert.equal(convertToRoman(59), 'LIX')
    })

    it('should return Roman Numeral LXXXVII when the Arabic number is 87', () => {
      assert.equal(convertToRoman(87), 'LXXXVII')
    })

    it('should return Roman Numeral XCIX when the Arabic number is 99', () => {
      assert.equal(convertToRoman(99), 'XCIX')
    })

    it('should return Roman Numeral C when the Arabic number is 100', () => {
      assert.equal(convertToRoman(100), 'C')
    })

    it('should return Roman Numeral CXXI when the Arabic number is 121', () => {
      assert.equal(convertToRoman(121), 'CXXI')
    })

    it('should return Roman Numeral CCXXI when the Arabic number is 221', () => {
      assert.equal(convertToRoman(221), 'CCXXI')
    })

    it('should return Roman Numeral CDXXI when the Arabic number is 421', () => {
      assert.equal(convertToRoman(421), 'CDXXI')
    })

    it('should return Roman Numeral DXXI when the Arabic number is 521', () => {
      assert.equal(convertToRoman(521), 'DXXI')
    })

    it('should return Roman Numeral CMXXI when the Arabic number is 921', () => {
      assert.equal(convertToRoman(921), 'CMXXI')
    })

    it('should return Roman Numeral MCMXXI when the Arabic number is 1921', () => {
      assert.equal(convertToRoman(1921), 'MCMXXI')
    })

    it('should return Roman Numeral MMMMMMMCMXXI when the Arabic number is 7921', () => {
      assert.equal(convertToRoman(7921), 'MMMMMMMCMXXI')
    })
  })
})

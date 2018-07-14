import {describe, it} from 'mocha'
import {assert} from 'chai'
import Convert from '../../../src/Katas/RomanNumerals/Convert'

describe('RomanNumerals', () => {
  describe('Convert', () => {
    it('should return an empty string when the Arabic number is 0', () => {
      assert.equal(Convert(1), 'I')
    })

    it('should return Roman Numeral II when the Arabic number is 2', () => {
      assert.equal(Convert(2), 'II')
    })

    it('should return Roman Numeral IV when the Arabic number is 4', () => {
      assert.equal(Convert(4), 'IV')
    })

    it('should return Roman Numeral V when the Arabic number is 5', () => {
      assert.equal(Convert(5), 'V')
    })

    it('should return Roman Numeral VI when the Arabic number is 6', () => {
      assert.equal(Convert(6), 'VI')
    })

    it('should return Roman Numeral IX when the Arabic number is 9', () => {
      assert.equal(Convert(9), 'IX')
    })

    it('should return Roman Numeral X when the Arabic number is 10', () => {
      assert.equal(Convert(10), 'X')
    })

    it('should return Roman Numeral XI when the Arabic number is 11', () => {
      assert.equal(Convert(11), 'XI')
    })

    it('should return Roman Numeral XI when the Arabic number is 11', () => {
      assert.equal(Convert(11), 'XI')
    })

    it('should return Roman Numeral XIV when the Arabic number is 14', () => {
      assert.equal(Convert(14), 'XIV')
    })

    it('should return Roman Numeral XXIII when the Arabic number is 23', () => {
      assert.equal(Convert(23), 'XXIII')
    })

    it('should return Roman Numeral XL when the Arabic number is 40', () => {
      assert.equal(Convert(40), 'XL')
    })

    it('should return Roman Numeral XLIII when the Arabic number is 43', () => {
      assert.equal(Convert(43), 'XLIII')
    })

    it('should return Roman Numeral LIX when the Arabic number is 59', () => {
      assert.equal(Convert(59), 'LIX')
    })

    it('should return Roman Numeral LXXXVII when the Arabic number is 87', () => {
      assert.equal(Convert(87), 'LXXXVII')
    })

    it('should return Roman Numeral XCIX when the Arabic number is 99', () => {
      assert.equal(Convert(99), 'XCIX')
    })

    it('should return Roman Numeral C when the Arabic number is 100', () => {
      assert.equal(Convert(100), 'C')
    })

    it('should return Roman Numeral CXXI when the Arabic number is 121', () => {
      assert.equal(Convert(121), 'CXXI')
    })

    it('should return Roman Numeral CCXXI when the Arabic number is 221', () => {
      assert.equal(Convert(221), 'CCXXI')
    })

    it('should return Roman Numeral CDXXI when the Arabic number is 421', () => {
      assert.equal(Convert(421), 'CDXXI')
    })

    it('should return Roman Numeral DXXI when the Arabic number is 521', () => {
      assert.equal(Convert(521), 'DXXI')
    })

    it('should return Roman Numeral CMXXI when the Arabic number is 921', () => {
      assert.equal(Convert(921), 'CMXXI')
    })

    it('should return Roman Numeral MCMXXI when the Arabic number is 1921', () => {
      assert.equal(Convert(1921), 'MCMXXI')
    })

    it('should return Roman Numeral MMMMMMMCMXXI when the Arabic number is 7921', () => {
      assert.equal(Convert(7921), 'MMMMMMMCMXXI')
    })
  })
})

import { describe, it, beforeEach } from 'mocha'
import { assert } from 'chai'
import ListGenerator from '../../../src/Katas/FizzBuzz/ListGenerator'

describe('FizzBuzz', () => {
  describe('listGenerator', () => {
    let listGenerator

    beforeEach(() => {
      listGenerator = new ListGenerator()
    })

    it('should return the first list item with a value of 1', () => {
      assert.equal(listGenerator.generate()[0], '1')
    })

    it('should return the second list item with a value of 2', () => {
      assert.equal(listGenerator.generate()[1], '2')
    })

    it('should return the third list item with a value of Fizz', () => {
      assert.equal(listGenerator.generate()[2], 'Fizz')
    })

    it('should return the third list item with a value of Buzz', () => {
      assert.equal(listGenerator.generate()[4], 'Buzz')
    })

    it('should return the third list item with a value of FizzBuzz', () => {
      assert.equal(listGenerator.generate()[14], 'FizzBuzz')
    })

    it('should return a list containing one hundred items', () => {
      assert.equal(listGenerator.generate().length, 100)
    })
  })
})

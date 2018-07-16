export default class ListGenerator {
  generate () {
    const schedule = []
    for (let playerTurn = 1; playerTurn <= 100; ++playerTurn) {
      if (ListGenerator.isFizz(playerTurn) && ListGenerator.isBuzz(playerTurn)) {
        schedule.push('FizzBuzz')
      } else if (ListGenerator.isFizz(playerTurn)) {
        schedule.push('Fizz')
      } else if (ListGenerator.isBuzz(playerTurn)) {
        schedule.push('Buzz')
      } else {
        schedule.push(playerTurn.toString())
      }
    }

    return schedule
  }

  static isFizz (playerTurn) {
    return playerTurn % 3 === 0
  }

  static isBuzz (playerTurn) {
    return playerTurn % 5 === 0
  }
}

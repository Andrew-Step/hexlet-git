//Функция, которая принимает число и возвращает "true", если оно совершенное, и "false" — в ином случае.
//Совершенное число — положительное целое число, равное сумме его положительных делителей (не считая само число).

const isPerfect = (num) => {
  let sumOfDivisors = 1;

  for (let i = 2; i <= num / 2; i += 1) {
    if (num % i === 0) {
      sumOfDivisors += i;
    }
  }
  return sumOfDivisors === num;
};
console.log(isPerfect(33550336)); //TRUE

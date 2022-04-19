//Функция, которая должна вернуть "true", если число счастливое (такое, которое в результате ряда преобразований вида "сумма квадратов цифр" превратится в единицу), и "false", если нет (количество итераций процесса поиска необходимо ограничить числом 10)

const sumOfSquareDigits = num => {
  const str = String(num);
  let result = 0;
  let i = 0;
  while (i < str.length) {
    result += Number(str[i]) ** 2;
    i +=1;
  }
  return result;
};

const isHappyNumber = num => {
  for (let i = 0; i < 10; i += 1) {
    if (num === 1) {
      return true;
    }
    num = sumOfSquareDigits(num);
  }
  return false;
};
console.log(isHappyNumber(7)); //TRUE
//export default isHappyNumber;
//Функция, которая проверяет является ли билет счастливым (номер — всегда строка). Функция должна возвращать "true", если билет счастливый, или "false", если нет

const isHappyTicket = (str) => {
  let len = str.length;
  let result = 0;

  if (len % 2 !== 0) {
    return false;
  }

  for (let i = 0; i < len / 2; i += 1) {
    result += str[i] - str[len - (i + 1)];
  }

  return result === 0;
};

console.log(isHappyTicket("385916")); //TRUE
//export default isHappyTicket;

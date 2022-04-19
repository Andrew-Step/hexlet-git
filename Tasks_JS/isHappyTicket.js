//Функция, которая проверяет является ли билет счастливым (номер — всегда строка). Функция должна возвращать "true", если билет счастливый, или "false", если нет

const isHappyTicket = str => {
    let result = 0;
  
    for (let i = 0; i < str.length / 2; i += 1) {
      result += str[i] - str[str.length - (1 + i)];
    }
    return result === 0;
  };
console.log(isHappyTicket('2222212340')); //TRUE
//export default isHappyTicket;
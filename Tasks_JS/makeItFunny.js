//Функция, которая принимает на вход строку и возвращает её копию, у которой каждый n-ный элемент переведен в верхний регистр

const makeItFunny = (str, n) => {
  let i = 0;
  let result = "";

  while (i < str.length) {
    if ((i + 1) % n === 0) {
      result += str[i].toUpperCase();
    } else {
      result += str[i];
    }
    i++;
  }

  return result;
};

const str = 'I never look back';
console.log(makeItFunny(str, 2));

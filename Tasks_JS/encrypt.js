//Функция, которая принимает на вход исходное сообщение и возвращает зашифрованное (переставляет в нем каждые два подряд идущих символа)

const encrypt = (str) => {
  let result = "";

  for (let i = 0; i < str.length; i += 2) {
    const nextSymbol = str[i + 1] || "";
    result = `${result}${nextSymbol}${str[i]}`;
  }

  return result;
};

const text = "121212!";
console.log(encrypt(text));
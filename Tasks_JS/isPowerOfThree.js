//Функция, которая определяет, является ли переданное число натуральной степенью тройки

const isPowerOfThree = num => (num > 1) ? isPowerOfThree(num / 3) : num === 1;
console.log(isPowerOfThree(14348907));	//TRUE
//export default isPowerOfThree;
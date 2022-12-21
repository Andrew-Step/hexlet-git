//Функция, которая принимает на вход количество минут (прошедших с начала суток) и возвращает строку, являющуюся временем в формате "чч:мм".
//Если количество минут содержит 24 часа (1 сутки) либо больше, то функция возвращает время, прошедшее с полуночи последних суток.

const formattedTime = (min) => {
    const minutesСount = min % 1440;
    const hours = Math.floor(minutesСount / 60) < 10 ? `0${Math.floor(minutesСount / 60)}` : Math.floor(minutesСount / 60);
    const minutes = minutesСount % 60 < 10 ? `0${minutesСount % 60}` : minutesСount % 60;

    return `${hours}:${minutes}`;
};

console.log(formattedTime(1441));

//export default formattedTime;
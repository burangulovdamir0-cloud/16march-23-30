let number = -5;
if (number < 0) {
  console.log("Число отрицательное");
} else {
  console.log("Число не отрицательное");
}

let str = "Пример строки";
console.log(str.length);

let str1 = "Пример строки";
console.log(str1[str1.length - 1]);

let number1 = 10;
if (number1 % 2 === 0) {
  console.log("Число чётное");
} else {
  console.log("Число нечётное");
}

let word1 = "Привет";
let word2 = "Планета";
if (word1[0] === word2[0]) {
  console.log("Первые буквы совпадают");
} else {
  console.log("Первые буквы не совпадают");
}

let word = "примерь";
let lastChar = word[word.length - 1];
if (lastChar === 'ь') {
  console.log(word[word.length - 2]);
} else {
  console.log(lastChar);
}

let num = 12345;
console.log(num.toString()[0]);

let num1 = 12345;
console.log(num1 % 10);

let num2 = 12345;
let first = num2.toString()[0];
let last = num2 % 10;
console.log(Number(first) + last);

let num3 = 12345;
console.log(num3.toString().length);

let num4 = 12345;
let num5 = 16789;
console.log(num4.toString()[0] === num5.toString()[0]);
/*
  Array Challenge
*/

let zero = 0;

let counter = 3;

let my = ["Ahmed", "Mazero", "Elham", "Osama", "Gamal", "Ameer"];

// Write Code Here
my.pop();
my.pop();
my.reverse();

console.log(my); // ["Osama", "Elham", "Mazero", "Ahmed"];

console.log(my.slice(1,3)); // ["Elham", "Mazero"]

console.log(my[1].substr(0,2)+my[2].substr(2,4)); // "Elzero"

console.log((my[2].substr(-2,1).concat(my[2].substr(-1,1).toUpperCase()))); // "rO"
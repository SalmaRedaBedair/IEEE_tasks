# number
```js
console.log(Number.MAX_SAFE_INTEGER);
console.log(Number.MAX_VALUE);
```
## Two Dots To Call A Method:
- In JavaScript, you can call a method of a `number` value using the dot notation `number.method()`.
- The dot notation allows you to access a set of built-in methods that are available on the `number` data type.
```js
console.log((100).toString());
```
## `toString()`: 
- The `toString()` method is used to convert a `number` value to a string. 
## `toFixed()`: 
- The `toFixed()` method is used to format a `number` value with a fixed number of decimal places. 
- It takes an integer parameter that specifies the number of decimal places to include in the formatted string.

## `parseInt()`: 
- The `parseInt()` method is used to convert a string to an integer. 
- It takes two parameters: the first is the string to convert, and the second is the base of the number system to use (2 for binary, 8 for octal, 10 for decimal, 16 for hexadecimal). If no second parameter is provided, it assumes base 10.

## `parseFloat()`: 
- The `parseFloat()` method is used to convert a string to a floating-point number.

## `isInteger()`: 
The `isInteger()` method is a new method in ECMAScript 6 (ES6) that returns `true` if a `number` value is an integer (i.e., has no fractional part) and `false` otherwise.

## Maths functions
- as c++ but use Math.method()
```js
console.log(Math.round(99.2));
```
- min & max can take more than two numers 
- trunc: return integer, remove decimals
## indexOf & lastIndexOf 
- we use it to search for a ward
- it take to parameters, first one is the thing to search for, second from where should i search
## slice & substring
- take substring from string 
- take two parameters (start,end)
- slice can take negative values to indicate end but substring no
```js
let s='loma';
console.log(s.slice(-1,-3));
console.log(s.substring(s.length -1,s.length-3));
```
## substr
- take two parameters: start and length
## split
- split string and return array
- take to parameters splitter and limit of splits (optional)
## include
- check if string include that substring or not
## start with
- cheack if word starts with specific substring
- take two parameters (substring, start position)
## ends with
- check if word ends with that substring or not
- take two parameters (substring, length)
## Logical Or ||
- Null + Undefined + Any Falsy Value
## Nullish Coalescing Operator ??
- Null + Undefined 
- not work with falsy value
```js
let price = 0;

console.log(`The Price Is ${price || 200}`); // work with falsy value
console.log(`The Price Is ${price ?? 200}`); // doesn't work with falsy value
```
## Arrays Methods [Adding And Removing]
  - `unshift("", "")` Add Element To The First
  - `push("", "")` Add Element To The End
  - `shift()` Remove First Element From Array and return it
  - `pop()` Remove Last Element From Array and return it
  - any thing you applied in string can be applied for arrays, too
  - `concat()` use to concat to arrays together
  - `join()` join array elements and return an string with seperator i define
## rest paramaters
- it is an array 
```js
function sum(...numbers){
  // make any operations you want on that numbers
}
```
## anonymous function
- function with no name
- we call it using variable name 
```js
let calculator = function(num1,num2){
  return num1+num2;
}
console.log(calculator(10,20));
```
- `why to use anonymous function`
  - for events
  - function setTimeout
## var & let
- var can be accessed in everywhere in our code (global)
- let is local 
## higher order function 
- function its parameters are functions 
- ex: map function for array
```js
let invertedNumbers=[1,-3,4,-6,13,44,-66];
let inv = invertedNumbers.map(function (ele){
  return -ele;
});
```
## join & split
- join -> convert array to string
- split -> convert string to an array 
## filter functoin
- filter array and return what you need only
- better than loop
```js
let numbers = [11,20,2,5,17,10];
let evenNumbers = numbers.filter(function(el){
  return el%2===0?true:false;
});
// function inside it must return only true or false
```
## reduce
- make operation on elements of array and return only one element
```js
let nums = [10,20,15,30];
let add = nums.reduce(function(acc,current,index,arr){
  return acc+current;
});
console.log(add);
```
## foreach
```js
let allLis = document.querySelectorAll("ul li");
allLis.forEach(function (ele){
  ele.onclick=function(){
    allLis.foreach(function(ele){
      ele.classList.remove("active");
    });
    this.classList.add("active");
  }
})
```
## object
```js
let user={
  theName: "salma",
  theAge: 21, 
};
```
- properties are accessed by dot notation or pracket notation
```js
user.theName or user['theName']
```
- if properity name is variable it can be accessed only by pracket notation
```js
let myvar='country'
let user={
  theName: "salma",
  theAge: 21, 
  country: "Egypt",
};
console.log(user[myvar]);
```
- we can make nested objects
```js
let user={
  name:"Osama",
  age:38,
  skills:['HTML','CSS'],
  available:false,
  addresses:{// object
  KSA: 'Riyad',
  egypt{
    one: "Cairo",
    two: "Mansoura",
  },
  },
  // access properity inside object
  checkAv: function(){
    if(available==true)
    {
      return 'Free';
    }else{
      return "NOt free";
    },
  }
};
```
## this key word
```js
document.getElementById("cl").onclick=function(){
  console.log(this);
  // this return button
}
```
## object create
- we use it to create object from another object (same as it with same properities and methods)
- use another object as prototype
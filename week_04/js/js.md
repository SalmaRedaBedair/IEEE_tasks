# js notes
- solve problems on leetcode
# typedef
- use to know type of data
```js
console.log(typedef ['os','ah'.'sa']); Array =>object
console.log(typedef {name:"salma", age:21, country: "Egypt"}); object
```
# diffrence between let and var 
- let give you error in console if you redeclare variable but var not
- var cause variable scope drama, when you decleare it it store in window object but let not
# concatination
```js
let a='salma ';
let b='reda'
document.write(a+b);
console.log(a,b); // will write them with space between  
console.log(`${a} 
${b}`); // will write them in two lines // any thing you write here will output as you you write
```
# writing output between `` make it to simple to make part of the page 
  ## lets see that example

```js
let markup=`
<div class='card'>
<div class='child'>
<h2>Title</h2>
<p>paragraph</p>
</div>
</div>
`
document.write(markup);
```
# NaN
- mean not a number
- it's type is a number
# unary operator
A unary operator in JavaScript is an operation that works on a single operand. It includes basic arithmetic operations such as addition (+) and subtraction (-), as well as type conversion operations such as typeof and delete.
## Unary plus (+)
converts its operand to a number
```js
const num = +'10';
console.log(num); // 10
```
## Unary minus (-)
converts its operand to a negative number
```js
const num = -10;
console.log(num); // -10
```
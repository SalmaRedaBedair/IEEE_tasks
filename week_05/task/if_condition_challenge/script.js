/*
  If Condition Challenge
*/

let a = 10;

if (a < 10) {
  console.log(10);
} else if (a >= 10 && a <= 40) {
  console.log("10 To 40");
} else if (a > 40) {
  console.log("> 40");
} else {
  console.log("Unknown");
}

// Write Previous Condition With Ternary If Syntax
console.log((a<10)?"10":(a >= 10 && a <= 40)?"10 To 40":(a > 40)?"> 40":"Unknown");

let st = "Elzero Web School";

// W Position May Change
if (st.substr(st.toLowerCase().indexOf('w'),1).toLowerCase() === "w") {
  console.log("Good");
}

if ( st !== "string") {
  console.log("Good");
}

if ( typeof(st/20) === "number") {
  console.log("Good");
}

if (st.substr(st.indexOf("Elzero"),6).repeat(2) === "ElzeroElzero") {
  console.log("Good");
}
let ignoreNumbers="El0ze940ro4390";

let ign=ignoreNumbers.split("").map(function(ele){
    return isNaN(parseInt(ele))?ele:"";
}).join("");
// split -> convert string to array to can use function map for it 
// function map is a higher order function, it can be passed with function as a parameter
// we use parseInt before isNan to return nan in case of chars and then can use is nan correctly
// join -> join array to string to return string at the end

console.log(ign);
# notes
## functions and diffrent between parameter and arguments
- paramater: variable
- argument: value
```php
function your_name($name) // paramter
{
    echo $name;
}
your_name('salma'); // argument
```
## variable arguments list
- with it we can pass variable number of arguments to the same function 
```php
function sum(...$nums)
{
    $sum=0;
    foreach($num as $nums)
    {
        $sum+=$num;
    }
    return $sum;
}
```
## variable function
```php
function say_hello_to($someOne){
    return "Hello $someOne";
}

$fun1="say_hello_to";

echo $fun1('salma');
```
## function_exists
- check if function exists or not
```php
function testing()
{
    return 'Testing';
}
if(function_exists('testing'))
echo testing();
else echo "function not exists";
```
## string replace & stirng irreplace
- replace string with another in string
```php
echo str_replace("@","o",'l@ma'); //loma  
```
- you may pass two arrays
```php
echo str_replace(["@",'l'],['o','s'],'l@ma');// soma
```
- the third argument also may be an array
```php
echo str_replace(["one","two","three"],[1,2,4],["one","two","three","loma","soso","manosha","lolo"]);
```
- `diffrence between string replace & stirng irreplace` => irreplace: insensitive
## substring replace
```php
substr_replace('one',1,0);
// string, stringWillReplace, IndexToStartFrom
```
## insert at stirng
```php
substr_replace('one',1,0,0);// 1one
// string, insertedValue, insert at, length => i till him here to insert not replace 
```
## array (current, next, prev)
```php
    $friends = ["loma", "soso", "manosha", "lolo", "sandy", "nour"];

    echo current($friends) . "<br>"; // "loma"
    echo next($friends) . "<br>"; // "soso"
    echo current($friends) . "<br>"; // "soso"
    echo next($friends) . "<br>"; // "manosha"
    echo current($friends) . "<br>"; // "manosha"
    echo prev($friends) . "<br>"; // "soso"
    echo reset($friends) . "<br>"; // "loma"
    echo current($friends) . "<br>"; // "loma"
    echo end($friends) . "<br>"; // "nour"
    echo current($friends) . "<br>"; // "nour"
```
## array merger
- merge two arrays
- if there is two same kay it will override value and get the second value
## diffence between array mege and array replace
The functions `array_merge` and `array_replace` are used to combine arrays in PHP, but they have some differences in terms of how they handle overlapping keys and the resulting array structure.

1. **array_merge:**
The `array_merge` function merges two or more arrays into a single array. It appends the values of the second array to the first array. If the arrays have the same string keys, the later value will overwrite the previous one. Numeric keys are re-indexed starting from zero. Here's an example:

```php
$array1 = ['10' => 'apple', '2' => 'banana'];
$array2 = ['2' => 'blueberry', '1' => 'cherry'];

$result = array_merge($array1, $array2);
print_r($result);
```

Output:
```
Array
Array
(
    [0] => apple
    [1] => banana
    [2] => blueberry
    [3] => cherry
)
```

1. **array_replace:**
The `array_replace` function replaces the values of the first array with the values from subsequent arrays. It does not re-index numeric keys or change the structure of the original array. If a key exists in multiple arrays, the value from the last array will overwrite the previous values. Here's an example:

```php
$array1 = ['10' => 'apple', '2' => 'banana'];
$array2 = ['2' => 'blueberry', '1' => 'cherry'];

$result = array_replace($array1, $array2);
print_r($result);
```

Output:
```
Array
(
    [10] => apple
    [2] => blueberry
    [1] => cherry
)
```
## array slice
- give tou part of array indexed from zero
- to keep keys as you defined pass true 
- the original array is not changed
## array splice
- cut part from array and put to another one
- the original array is changed
- you can remove them and add another array in their place
## array sort functions 
1. **sort**: Sorts an array in ascending order based on the values. It re-indexes the array numerically.
```php
$array = [3, 1, 2];
sort($array);
print_r($array); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
```

2. **rsort**: Sorts an array in descending order based on the values. It re-indexes the array numerically.
```php
$array = [3, 1, 2];
rsort($array);
print_r($array); // Output: Array ( [0] => 3 [1] => 2 [2] => 1 )
```

3. **asort**: Sorts an array in ascending order based on the values while maintaining key-value associations.
- it is used for associative array => sort by values
```php
$array = ['c' => 3, 'a' => 1, 'b' => 2];
asort($array);
print_r($array); // Output: Array ( [a] => 1 [b] => 2 [c] => 3 )
```

4. **arsort**: Sorts an array in descending order based on the values while maintaining key-value associations.
```php
$array = ['c' => 3, 'a' => 1, 'b' => 2];
arsort($array);
print_r($array); // Output: Array ( [c] => 3 [b] => 2 [a] => 1 )
```

5. **ksort**: Sorts an array in ascending order based on the keys while maintaining key-value associations.
- it is used for associative array => sort by keys

```php
$array = ['c' => 3, 'a' => 1, 'b' => 2];
ksort($array);
print_r($array); // Output: Array ( [a] => 1 [b] => 2 [c] => 3 )
```

6. **krsort**: Sorts an array in descending order based on the keys while maintaining key-value associations.
```php
$array = ['c' => 3, 'a' => 1, 'b' => 2];
krsort($array);
print_r($array); // Output: Array ( [c] => 3 [b] => 2 [a] => 1 )
```
7. **natsort** 
- used for natural sorting. Natural sorting is a sorting algorithm that treats alphanumeric strings in a way that is more human-friendly, where numbers within strings are sorted in numeric order instead of purely based on their ASCII values.
```php
$array = ['item1', 'item10', 'item2'];
natsort($array);
print_r($array);
```
OUTPUT:
```
Array
(
    [0] => item1
    [2] => item2
    [1] => item10
)
```
- In this example, the natsort function is used to sort the array in natural order. Instead of sorting purely based on the ASCII values of the strings, natsort takes into account the numeric values within the strings. As a result, the array is sorted as ['item1', 'item2', 'item10'] rather than ['item1', 'item10', 'item2'], which would have been the case with a regular string sorting function.

- The natsort function modifies the original array directly and re-indexes the keys numerically. If you want to preserve the original keys, you can use the uasort function with a custom comparison function that implements natural sorting.

- It's important to note that natsort is case-sensitive, meaning that uppercase letters are considered different from lowercase letters during the sorting process. If you want a case-insensitive natural sorting, you can use the natcasesort function instead.
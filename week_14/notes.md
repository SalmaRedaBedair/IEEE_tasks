# create class & object
```php
class AppleDevice{
    public int $x;
}

$iphone6plus=new AppleDevice();
```

# visibility markers
- public 
- private
- protected

# Access any proprty
```php
$iphone6plus->x=5;
```

# default values
```php
class AppleDevice{
    public int $x=5;
}

$iphone6plus=new AppleDevice();
vardump($$iphone6plus)
/*
output:
-----------

5object(AppleDevice)#1 (1) {
    ["x"]=>
    int(5)
}
*/
```
# function
```php
class AppleDevice{
    public function doubleHomePressed()
    {
        echo 'You have pressed the home button twice.';
    }
}

echo $iphone6plus->doubleHomePressed();
```

# this
- peseudo variable

# contants in class
```php
class Apple{
    const CHIP='A9';
}
```
- to access contants in class we use key word self
```php
self::CHIP;
```
- to access contains outside class
```php
className::CONSTANT;
// ex:
Apple::CHIP;
// or using object name;
$iphone6plus::CHIP;
```
# self & this
- self: work only with static (contstants) values, do not use $
- this: work with not static (variables) values, use $ because it represent a variable

# :: 
- scope resolution operator

# encapsulation
- make properities private and access it only using functions

# add property
- i can add new property that is not in the class

```php
class Apple{

}
$apple=new Apple();
$apple->price=80000; // that price is not in the class put i add it only for that object
```

# final
- add it to function to stop children from overwrite it 

```php
class Hallo
{
    final public function sayHi() // can not overwrite it
    {
        echo 'Hi';
    }
}
```
- we can also add that keyword to class to stop it from being extends

```php
final class Hallo
{
    final public function sayHi() // can not overwrite it
    {
        echo 'Hi';
    }
}
```
# abstract class
- used to make template to be used using other classes
- can not make object from it
- we can put in it abstract function or normal functions
- best practice to use only abtract functions inside them
- we must use same access modifier or a2l, i can not use higher

# abstract functions
- functions with out body 
- use keywoed abstract before it
# higher order function
- function accept another function as an argument
## diifrence between array filter and array map
- array map => can take one or more arrays
- array filter => filter data take what we need only and reject others 
- both applay function to the arrays i enter
## file_exists()
- check if file is here or not like class_exists()
# Time
- date_default_time_zone_set('time_zone_name');
- date_default_time_zone_get();
- date_format('date','Y-m-d');// Y-m-d as an example
- check_date(y,m,d) => check if the date is correct or not
## Date And Time Functions

    - date_format()

    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month

    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds
- ## date_add()
  - add some days to the date i entered
  - if i want to add 2 months after today =>
    date_add(date('Y-m-d',date_interval_create_from_date_string('2 months')));
  - or date_add(date('Y-m-d',date_interval_create_from_date_string('1 year 2 months 17 day')));
- ## date_sub()
  - same as date add but it remove
- ## date_modify()
  - date_modify(now('Y-m-d','+20 months'))
# cookies
- we can use php to make cookies 
- set_cookie(key,value,time,path) => path: where that cookie will be loaded
  ex: set_cookie('style','dark',strtotime('+1 month'),'/') / => indicate that cookie will be loaded over all pages in my domain
  ex: set_cookie('style','dark',strtotime('+1 month'),'/post') / => indicate that cookie will be loaded only inside post
- we use cookies for things that will end at the end of the session
- language and theme are stored in database
- we can make array inside cookies like array style
  ex: set_cookie("style['color']",'red');
      set_cookie("style['language']",'arabic');
      set_cookie("style['border']",'solid');
## practice example on cookie
- that example will set background according to cookie i set
```php
  if (isset($_COOKIE["background"])) {
    echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
    header("Location: " . $_SERVER["REQUEST_URI"]);
    exit();
  }
```
# session
- session is stored in server
- session unset: unset session data but it stell here
- session sestroy: destroy the session
## after header you must use exit
<?php 
class AppleDevice{
    public int $x=5;

    public function doubleHomePressed()
    {
        echo 'You have pressed the home button twice.';
    }
}

$iphone6plus=new AppleDevice();

echo $iphone6plus->x;

var_dump($iphone6plus);

echo $iphone6plus->doubleHomePressed();
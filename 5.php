<?php
class Orange{
    public static $count=0;
    public function __construct()
    {
        self::$count++;
    }

}
$or=new Orange();
$or1=new Orange();
$or2=new Orange();
echo Orange::$count;
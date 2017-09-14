<?php
class User{
    private $name;
    private $password;
    public $email;
    public function __construct()
    {
    }

    public function __set($name, $val){
        $this->name=$val;

    }
   public function __get($name)
   {
       // TODO: Implement __get() method.
       return $this->name;
   }
}
$a=new User();
$a->__set("name", "iii");
echo $a->__get("gg");

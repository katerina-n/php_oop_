<?php
interface Log{
    public function Login();
    public function Logout();

}
class User implements Log{
    public $name;
    public $password;
    public function __construct($name, $password)
    {
        $this->name=$name;
        $this->password=$password;
    }

    public function Login()
    {
        // TODO: Implement Login() method.
        if(!empty($this->name)&&(!empty($this->password))){
            echo "You are login"."<br>";
        }
    }
    public function Logout()
    {
        // TODO: Implement Logout() method.
        echo "You are logout"."<br>";
    }
}
$user=new User("ina", "123");
$user->Login();
$user->Logout();
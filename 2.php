<?php
class Car{
    public $brand;
    public $model;
    public $year;
    public $driver;
    public function __construct($brand, $model, $year, $driver="mike")
    {
        $this->brand=$brand;
        $this->model=$model;
        $this->year=$year;
        $this->driver=$driver;
    }

    public function __toString(){
        return $this->brand." ".$this->model." ".$this->year;
}
public function showBrand(){
        return $this->brand;
}
public function showModel(){
    return $this->model;
}
private $price;
public function getPrice(){
    if(!empty($this->price)){
        return number_format($this->price);
    }

}
public function setPrice($price){
    $this->price=$price;
    $price=round($price, 2);
}

}

class WaterCar extends Car{
    public $waterSpeed;
}
//Toyota Corolla (2000), Mazda 6 (2015), Ford Taurus (1995)
class User{
    public $name;
    protected $id;
    public $email;
    public function login(){
        return true;
}
public function logout(){
        return true;
}
public function isLog(){
    if($this->login()){
        echo "Vu yspeshno zaregestrirovalis'";
    }
    else{
        if($this->logout())
        echo "Vu ne zaregestrivovalis'";
    }
}
}
class Manager extends User{

}
class Admin extends User{

}
$user=new User();
$user->name="Jack";
$manager1=new Manager();
$manager1->name="Lili";
  //  $car=new Car();
//$car->brand='Toyota';
//$car->model='Corolla';
//$car->year=2000;
//$car->driver=$user->name;
//var_dump($car);
$car2=new Car("Mazda", 6, 2015 );
echo ($car2);
$car2->setPrice(13400.789);
echo ("<br>".$car2->getPrice());
$userA=new User();
$userA->name="Vovo";
$userB=clone $userA;
$userB->name="Momo";
echo $userA->name;
echo $userB->name;


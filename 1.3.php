<?php
class Fraction{
    public $numer;
    public $denomin;
    public function __construct($numer, $denomin)
    {
        $this->numer=$numer;
        $this->denomin=$denomin;

    }
    public function fract(){

        $c=$this->numer/$this->denomin;
        return round($c,3);

    }
}

class Cat{
    public $name;
    public $age;
    public function _toString(){
        var_dump($this->name." ".$this->age);
    }
}
$obj=new Fraction(3,4);

echo ($obj->fract());

class Request{
    public $url;
    public $headers;
    public $method;
    public $status;
public function __toString()
{
    return $this->url." ".$this->headers." ".$this->status;
}
}



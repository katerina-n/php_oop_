<?php
class Fraction{
    public $a;
    public $b;
    public function __construct($a, $b){
        $this->a=$a;
        $this->b=$b;
    }
    public function division(){

        try{
            $c=$this->a/$this->b;
            if($this->b==0){
                throw new Exception('you cant division');
            }
            $c=$this->a/$this->b;
        }
        catch (Exception $e){
            echo $e->getMessage();
        }
        return $c;
    }

}
$d=new Fraction(3,0);
echo $d->division();
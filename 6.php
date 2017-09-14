<?php
class Fraction{
    public $a;
    public $b;
    public function __construct($a, $b)
    {
        $this->a=$a;
        $this->b=$b;
    }
    public function sorten(){
        $c=max($this->a, $this->b);
        for($i=2; $i<=$c/2; $i++){
            if((($this->a)%($i)==0)&&($this->b)%($i)==0){
                $aa=($this->a)/($i);
                $bb=($this->b)/($i);
                return $aa."/".$bb;
            }
        }
    }
    public function dec(){
        return round(($this->a)/($this->b),3);
    }
    public static function amount($c, $d){
        return $c+$d;
    }
    public static function differ($c, $d){
return $c-$d;
    }
}
$dr=new Fraction(5,10);
echo $dr->sorten();
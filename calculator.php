<?php
class Fraction{
    private $numerator;
    private $denominator;

    public function __construct($numerator, $denominator)
    {
        // check if int, if not - invalidArgumentException


        if (!$denominator) {
            throw new InvalidArgumentException('D cannot be 0');
        }

        $this->numerator = $numerator;
        $this->denominator = $denominator;
    }
    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->numerator."/".$this->denominator;
    }

    public function getDecimal()
    {
        return $this->numerator / $this->denominator;
    }

    private function Evclid($numerator, $denominator)
    {

        $d = $numerator;
        while ($d != 0) {
            if ($numerator > $denominator) {
                $cmax = $numerator;
                $cmin = $denominator;
            } else {
                $cmax = $denominator;
                $cmin = $numerator;
            }
            $d = ($cmax) % ($cmin);
            $numerator = $denominator;
            $denominator = $d;
        }
        return $numerator;

    }

    public function wholePart(Fraction $c){
        if($c->numerator>=$c->denominator){
            $part=intval($c->numerator/$c->denominator);
            $c->numerator=($c->numerator)%($c->denominator);
            $newFranctwithoutPart=new Fraction($c->numerator, $c->denominator);
            return $part." ".$newFranctwithoutPart;
        }
    }
    public function reduce()
    {
        $res = $this->Evclid($this->numerator, $this->denominator);
        $this->numerator /= $res;
        $this->denominator/=$res;
        $new=$this->numerator."/".$this->denominator;
        return $new;
    }

    public static function addFraction(Fraction $a, Fraction $b)
    {
        // return new Fraction(...);
        $anum=$a->numerator*$b->denominator;
        $bdenom=$b->numerator*$a->denominator;
        $newNumerator=$anum+$bdenom;
        $newDenumerator=$a->denominator*$b->denominator;
        $newFraction=new Fraction($newNumerator, $newDenumerator);
        return  $newFraction->reduce();



    }

    public static function minusFraction(Fraction $a, Fraction $b)
    {
        $anum=$a->numerator*$b->denominator;
        $bdenom=$b->numerator*$a->denominator;
        $newNumerator=$anum-$bdenom;
        $newDenumerator=$a->denominator*$b->denominator;
        $newFraction=new Fraction($newNumerator, $newDenumerator);
        return $newFraction->reduce();


    }
    public static function multiplyFraction(Fraction $a, Fraction $b){
        $anum=$a->numerator*$b->numerator;
        $bdenom=$a->denominator*$b->denominator;
        $newFaction=new Fraction($anum, $bdenom);
        return $newFaction->reduce();
    }
    public static function divide(Fraction $a, Fraction $b){
        $anum=$a->numerator*$b->denominator;
        $bdenom=$a->denominator*$b->numerator;
        $newFaction=new Fraction($anum, $bdenom);
        return $newFaction->reduce();
    }
    public static function power(Fraction $a, $n){
        $anum=pow($a->numerator , $n);
        $bdenom=pow($a->denominator, $n);
        return new Fraction($anum, $bdenom);
   }
   public static function root(Fraction $a){
$anum=round(sqrt($a->numerator),2);
$bdenom=round(sqrt($a->denominator),2);
return new Fraction($anum, $bdenom);
   }
}
$dr=new Fraction(7, 5);
//echo $dr->reduce();
$dr1=new Fraction(6, 3);
//echo Fraction::addFraction($dr, $dr1)."<br>";

//echo Fraction::minusFraction($dr, $dr1)."<br>";
//echo Fraction::root($dr, $dr1);

try{
    if(!empty($_GET)){
        if(isset($_GET['FirstFractionNumer'])){
            $numerFirst=$_GET['FirstFractionNumer'];
//echo $numerFirst;
        }
        if(isset($_GET['FirstFractionDenom'])){
            $denomFirst=$_GET['FirstFractionDenom'];
//echo $denomFirst;
        }
        if(isset($_GET['vall'])){
            $vall=$_GET['vall'];
            // echo $vall;
        }
        if(isset($_GET['SecondFractionNumer'])){
            $numerSecond=$_GET['SecondFractionNumer'];
        }
        if(isset($_GET['SecondFractionDenom'])){
            $denomSecond=$_GET['SecondFractionDenom'];
        }


    }



}catch(Exception $e){
    echo $e->getMessage();
}
$link = @mysqli_connect('localhost', 'root', '', 'fraction');
if ($link === false) {
    die('Unable to connect to DB: ' . mysqli_connect_error ());
}
$query="INSERT INTO fraction (numeric_one, denom_one, sign, numeric_two, denom_two)
 VALUE ('$numerFirst', '$denomFirst','$vall', '$numerSecond', '$denomSecond' )";
$result=mysqli_query($link,$query);
echo mysqli_error($link);
$sel="SELECT sign FROM fraction WHERE id=(select max(id) from fraction)";
$s=mysqli_query($link, $sel);
$ss=mysqli_fetch_all($s);
mysqli_close($link);


$object1=new Fraction($numerFirst, $denomFirst);
$object2=new Fraction($numerSecond, $denomSecond);
if($vall=="+"){
    $object3=Fraction::addFraction($object1, $object2);

}
else{
    if($vall=="-"){
        $object3=Fraction::minusFraction($object1, $object2);
    }
    else{
        if($vall=="*"){
            $object3= Fraction::multiplyFraction($object1, $object2);
        }
        else{
            if($vall=="/"){
                $object3=Fraction::divide($object1, $object2);
            }
        }
    }
}

?>


<div style="border: solid; color: black; background-color: #a0a0a0; z-index: -1; width: 60%; height: 40%; ">
    <form action="" method="get">
       <div style="display: inline-block; position: absolute; left: 10%">
           <p> <input type="text" name="FirstFractionNumer" value="<?php echo $_GET["FirstFractionNumer"]?>"
                      style="background-color: #d0d0d0; width: 50px; height: 50px" > </p>
        <hr style="width: 30px; height: 3px; background-color: black;">
           <p> <input type="text" name="FirstFractionDenom" value="<?php echo $_GET["FirstFractionDenom"]?>"
                      style="background-color: #d0d0d0; width: 50px; height: 50px"> </p>
       </div>
       <div  style="display: inline-block; position: absolute; left: 20%; top: 12%">
           <p> <select size="1" name="vall" style="width: 50px; height: 50px; background-color: #d0d0d0">
                <option  value="+" <?php if ($vall=="+") echo "selected"; ?> ><p>+</p></option>
        <option  value="-" <?php if ($vall=="-") echo "selected"; ?> ><p>-</p></option>
        <option value="*" <?php if ($vall=="*") echo "selected"; ?> ><p>*</p></option>
        <option value="/" <?php if ($vall=="/") echo "selected"; ?> ><p>/</p></option>
           </select>
        </p>
       </div>
        <div  style="display: inline-block; position: absolute; left: 30%">
            <p> <input type="text" name="SecondFractionNumer" value="<?php echo $_GET["SecondFractionNumer"]?>"
                       style="background-color: #d0d0d0; width: 50px; height: 50px"> </p>
            <hr style="width: 30px; height: 3px; background-color: black;">
            <p> <input type="text" name="SecondFractionDenom" value="<?php echo $_GET["SecondFractionDenom"]?>"
                       style="background-color: #d0d0d0; width: 50px; height: 50px"> </p>

        </div>
        <div  style="display: inline-block; position: absolute; left: 38%; top: 12%">
            <p> <input type="submit" name="eq" value="=" style="width: 50px; height: 50px; background-color: #d0d0d0">

        </select>
        </p>
        </div>

        <div  style="display: inline-block; position: absolute; left: 46%">

            <p style="font-size: 280%"><?php if(!empty($_GET)){ if(isset($_GET['eq'])){  echo $object3;}}?></p>

        </div>
    </form>
</div>




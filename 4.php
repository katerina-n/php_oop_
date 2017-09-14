<?php
class ContactForm{
    public $name;
    public $lastname;
    public function __construct($name, $lastname)
    {
        $this->name=$name;
        $this->lastname=$lastname;
    }
}
if(!empty($_GET)) {
    if(isset($_GET["name"])&&(isset($_GET["lastname"]))) {
        $a=$_GET["name"];
        $b=$_GET["lastname"];
        $obj=new ContactForm($a, $b);
        var_dump($obj);

    }


}
?>
<form method="get" action="">
    <input type="text" name="name"><br>
    <input type="text" name="lastname"><br>
    <input type="submit">
</form>

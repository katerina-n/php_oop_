<?php
if(!empty($_GET)){
    if(isset($_GET['name'])){
        $login=$_GET['name'];
    }
    if(isset($_GET['password'])){
        $password=$_GET['password'];
    }
}
?>
<form method="get" action="http_request.php">
    <input type="text" name="name"><br>
    <input type="text" name="password"><br>
    <input type="submit">

</form>
<?php
class Request{
    public $url;
    public function getorPost(){
        if($_SERVER['REQUEST_METHOD']=='POST'){
            $url='POST';

        }
        else{
            if($_SERVER['REQUEST_METHOD']=='GET'){
                $url='GET';
            }

        }
        return $url;
    }
    static $http_doc="HTTP/1.0";
    public $httpp;
    public function httpAd(){
if(empty($_SERVER['HTTP_REFERER'])){
    $httpp='localhost or http://' .$_SERVER['HTTP_HOST'];
}
else $httpp=$_SERVER['HTTP_REFERER'];
return $httpp;
    }
    public $host;
    public function host(){
        if(!empty($_SERVER['HTTP_HOST'])){
            $host=$_SERVER['HTTP_HOST'];
        }
return $host;
    }
    public function __construct()
    {
        $this->url=$this->getorPost();
        $this->httpp=$this->httpAd();
        $this->host=$this->host();
    }

}
var_dump(new Request());
//echo $a->getorPost();
?>

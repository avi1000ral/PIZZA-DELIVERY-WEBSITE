<?php
$name=$_POST['name'];
$sltpizza=$_POST['sltpizza'];
$numpizza=$_POST['numpizza'];
$mob=$_POST['mob'];
check_ppizza($sltpizza,$numpizza);
check_name($name);
check_mobile($mob);
function check_ppizza($sltpizza,$numpizza){
if($sltpizza=="Veg Italiano")
{
$price=625;
$tprice=$numpizza*$price;
echo "your price for $numpizza pizza is : ".$tprice."<br>";
}
if($sltpizza=="Veg Exotica")
{
$price1=575;
$tprice1=$numpizza*$price1;
echo "your price for $numpizza pizza is : ".$tprice1."<br>";
}
if($sltpizza=="Veggie Supreme")
{
$price2=545;
$tprice2=$numpizza*$price2;
echo "your price for $numpizza pizza is : ".$tprice2."<br>";
}
if($sltpizza=="Spiced Paneer")
{
$price3=415;
$tprice3=$numpizza*$price3;
echo "your price for $numpizza pizza is : ".$tprice3."<br>";
} }
function check_name($name){
$i;$c=0;$ch;$ch1;
$s=strlen($name);
for($i=0;$i<$s;$i++){
$ch1=substr($name,$i,1);
$ch=ord($ch1);
if($ch>=65 && $ch<=90 || $ch>=97 && $ch<=122)
$c++;
}
if($c!=$s || $s==0)
echo "Invalid name. Enter only characters<br>";
else
echo "Valid name<br>";
}
function check_mobile($mob){
$s;
$a=ctype_digit($mob);
$s=strlen($mob);
if($a!=1 || $s!=10)
echo "Invalid mobile no.<br>";
else
echo "Valid mobile no.<br>";
}
session_start();
if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='') {
echo '<strong>Incorrect verification code.</strong>';
} else {
echo '<strong>Verification successful.</strong>'; };

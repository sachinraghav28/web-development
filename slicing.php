<?php
$a=$_REQUEST['t1'];
$b=$_REQUEST['t2'];
echo"$a<br>";
$st=substr($a,2,6);
$num=number_format($st);
if($num==1500)
{
echo "aiml<br>";
}
else if($num==1501)
{
echo "csf<br>";
}
else if($num==1502)
{
echo"da<br>";
}
else{
echo"core";
}
?>
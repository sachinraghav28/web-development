<?php
$s=$_GET['t1'];
$f=fopen("feedback.txt", "a");
$s=$s."\n";
fwrite($f,$s);
echo "program successfully run";
?>

<?php
    $conn=mysqli_connect('localhost','root');
    mysqli_select_db($conn,'crud1');
    if ($conn){
         echo"connected";
     }
     else{
         echo"error";
     }
?>
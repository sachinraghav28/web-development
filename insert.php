<?php
    include'conn.php';
    if(isset($_POST['done'])){
       $username=$_POST['username'];
       $password=$_POST['password'];
       $q="INSERT INTO `rise`(`username`,`password`) VALUE('$username','$password')";
       $query =  mysqli_query($conn,$q);
    }

?>
<html>
    <head> 
        <title>
            Insertion page 
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 </head>
<body>
     <div class ="col-lg-6m-auto">
       <foam method="post">
        <br><br><div class="card">
            <div class="card header bg-dark">
                <h1 class="text-white-center">Insert Operation</h1>
           </div><br>
           <label>username:</label>
           <input type ="text" name ="username" class="form-control"><br>
           <label> password:</label>
           <input type="text" name="password" class="form-control"><br>
           <button class="btn btn-success" type="submit" name="done"><a href="display.php">submit</a></button><br>
        </foam>
    </div>
</body>
</html>   
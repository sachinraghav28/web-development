<html>
    <head>
        <title>display page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class ="comtainer">
        <div class="col-lg-12">
            <br><br>
            <h1 class ="text-warning text-center">display table data</h1>
            <br>
            <table id="tabledata" class ="table table-strped table table-hover">
                <tr class ="bg=dark text-while text-center">
                    <th>Id</th>
                    <th>username</th>
                    <th>passowrd</th>
                    <th>delete</th>
                    <th>update</th>
                </tr>
                <?php
                   include'conn.php';
                   $q= mysqli_query($conn,$q);

                   while($res = musqli_fetch_arry($qurey)){
                ?>
                <tr class ="text-center">
                    <td><?php echo $res['id'];?></td> 
                    <td><?php echo $res['username'];?></td>
                    <td><?php echo $res['password'];?></td>
                    <td><button class="btn-dander btn"><a href="" class="text-white">delete</a></button></td>
                    <td><button class="btn-dander btn"><a href="" class="text-white">update</a></button></td>  
                </tr>
                <?php
                   }
                   ?>
            </table>                   
        </div>
     </div>
</body>
</html>
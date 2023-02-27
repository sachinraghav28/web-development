<?php
    include'conn.php';
    $id=$_GET['id'];
    $q="DELETE FROM `rise` WHERE id =$id";
    mysqli_qurey($conn,$q);

    while($res = musqli_fetch_arry($qurey)){
        ?>
        <tr class ="text-center">
            <td><?php echo $res['id'];?></td> 
            <td><?php echo $res['username'];?></td>
            <td><?php echo $res['password'];?></td>
            <td><button class="btn-dander btn"><a href="delete.php" </button></td>
            <td><button class="btn-dander btn"><a href="" class="text-white">update</a></button></td>  
        </tr>
        <?php
           }
           ?>
    </table>        
?>
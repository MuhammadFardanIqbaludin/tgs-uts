<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $kdminum=$_POST['kdminum'];
 $nmminum=$_POST['nmminum'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"UPDATE `minuman` SET `kdminum`='$kdminum',`nmminum`='$nmminum',`harga`='$harga' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>
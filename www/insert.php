<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $kdminum=$_POST['kdminum'];
 $nmminum=$_POST['nmminum'];
 $harga=$_POST['harga'];
 $q=mysqli_query($con,"INSERT INTO `minuman` (`kdminum`,`nmminum`,`harga`) VALUES ('$kdminum','$nmminum','$harga')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>
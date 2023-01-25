<?php

session_start();
$p1=$_POST['taxi1'];
$p2=$_POST['taxi2'];




include "../dbconn.php";

$sql="SELECT * FROM `admin` WHERE `login`='$p1' AND `password`=sha1('$p2')";
$res=mysqli_query($conn,$sql);
$tox=mysqli_num_rows($res);

// echo $tox;
if($tox>0){
	$_SESSION['bubul']='cucul';
	echo '<script>window.location.href="../index_admin.php"</script>';
}else{
	echo '<img src="x.png" width="100%">';
}

?>


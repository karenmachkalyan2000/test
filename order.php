<?php
$p1=$_POST['vle1'];
$p2=$_POST['vle2'];
$p3=$_POST['vle3'];
$p4=$_POST['vle4'];
$p5=$_POST['vle5'];





// echo $p1.'<hr>'.$p2.'<hr>'.$p3.'<hr>'.$p4.'<hr>'.$p5;



include 'dbconn.php';

$sql="INSERT INTO `zakaz`(`hamar`,`avtoifirma`,`masianun`,`qanak`,`hasce`) VALUES ('$p1','$p2','$p3','$p4','$p5')";
$res=mysqli_query($conn,$sql);

// sleep(5000);
header('location:index.php');






   ?>
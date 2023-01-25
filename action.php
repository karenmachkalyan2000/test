<?php 
include 'dbconn.php';
if (isset($_POST['kar1'])&&isset($_POST['kar3'])&&isset($_POST['kar5'])&&isset($_POST['kar7'])&&isset($_POST['kar9'])) {
$p1= $conn -> real_escape_string($_POST['kar1']);
$p3= $conn -> real_escape_string($_POST['kar3']);
$p5= $conn -> real_escape_string($_POST['kar5']);
$p7= $conn -> real_escape_string($_POST['kar7']);
$p9= $conn -> real_escape_string($_POST['kar9']);




    




include "dbconn.php";

$sql="UPDATE `carousel` SET `img1`='$p1',`img2`='$p3',`img3`='$p5',`img4`='$p7',`img5`='$p9' WHERE `id`='1'";
$res=mysqli_query($conn,$sql);

header('location:index_admin.php');




}













if (isset($_POST['imp1'])&&isset($_POST['imp2'])&&isset($_POST['imp3'])&&isset($_POST['id'])&&isset($_POST['typo'])) {
    $p1= $conn -> real_escape_string($_POST['imp1']);
    $p2= $conn -> real_escape_string($_POST['imp2']);
    $p3= $conn -> real_escape_string($_POST['imp3']);
    $id= $conn -> real_escape_string($_POST['id']);
    $p5= $conn -> real_escape_string($_POST['typo']);
    $p4='';
if(empty($_POST['rto'])){
   $p4='yes';
}else{
   $p4=$_POST['rto'];
}


    




$sql="UPDATE `portfolio` SET `img`='$p3',`text1`='$p1',`text2`='$p2',`top`='$p4',`types`='$p5' WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);

header('location:index_admin.php');




}



if (isset($_POST['impp1'])&&isset($_POST['impp2'])&&isset($_POST['impp3'])&&isset($_POST['id1'])) {
    $p1= $conn -> real_escape_string($_POST['impp1']);
    $p2= $conn -> real_escape_string($_POST['impp2']);
    $p3= $conn -> real_escape_string($_POST['impp3']);
    $id1= $conn -> real_escape_string($_POST['id1']);



    




$sql="UPDATE `gallery` SET `img`='$p3',`text1`='$p1',`text2`='$p2' WHERE `id`='$id1'";
$res=mysqli_query($conn,$sql);

header('location:index_admin.php');





}


if (isset($_POST['inpp1'])&&isset($_POST['inpp2'])&&isset($_POST['inpp3'])&&isset($_POST['typeso'])) {
    $p1= $conn -> real_escape_string($_POST['inpp1']);
    $p2= $conn -> real_escape_string($_POST['inpp2']);
    $p3= $conn -> real_escape_string($_POST['inpp3']);
    $p5= $conn -> real_escape_string($_POST['typeso']);
$p4='';
if(empty($_POST['yuo'])){
   $p4='no';
}else{
   $p4=$_POST['yuo'];
}





$sql="INSERT INTO `portfolio`(`img`,`text1`,`text2`,`top`,`types`) VALUES ('$p3','$p1','$p2','$p4','$p5')";
$res=mysqli_query($conn,$sql);

header('location:index_admin.php');



}



if (isset($_POST['inppp1'])&&isset($_POST['inppp2'])&&isset($_POST['inppp3'])) {
    $p1= $conn -> real_escape_string($_POST['inppp1']);
    $p2= $conn -> real_escape_string($_POST['inppp2']);
    $p3= $conn -> real_escape_string($_POST['inppp3']);






$sql="INSERT INTO `gallery`(`img`,`text1`,`text2`) VALUES ('$p3','$p1','$p2')";
$res=mysqli_query($conn,$sql);

header('location:index_admin.php');



}






if (isset($_POST['taxi1'])) {
     $p1= $conn -> real_escape_string($_POST['taxi1']);




$sql="SELECT * FROM `portfolio` WHERE `text1` LIKE '%$p1%'";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    





                    <div class="col-lg-4 col-sm-6 col-6 mx-auto">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item tngo">
                            <a class="portfolio-link " data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                            
                               
                                
                                <img class="img-fluid jjko" src="assets/img/portfolio/$print[img]" alt="..." />
                                
                                   
                                

                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> $print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                                <div class='d-none'>$print[types]</div>
                            </div>
                        </div>
                    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal1-$print[id]" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">$print[text1]</h2>
                                    <p class="item-intro text-muted">$print[text2]</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/$print[img]" alt="..." />
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  


 
                
kku;





echo $txt;
  

            }



}




if (isset($_POST['id_port'])&&isset($_POST['img_path'])&&isset($_POST['data_name'])) {
    $id= $conn -> real_escape_string($_POST['id_port']);
    $img_path= $conn -> real_escape_string($_POST['img_path']);
    $data_name= $conn -> real_escape_string($_POST['data_name']);






$sql="DELETE FROM `$data_name` WHERE `id`='$id'";
$res=mysqli_query($conn,$sql);


	if ($res) {
		unlink($img_path);
	}



}






if (isset($_POST['tax1'])) {
    $p1= $conn -> real_escape_string($_POST['tax1']);




            $sql="SELECT * FROM `portfolio` LIMIT $p1,3";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    



                    <div class="col-lg-4 col-sm-6 col-6 mx-auto">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item tngo">
                            <a class="portfolio-link " data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                           
                               
                                
                                <img class="img-fluid jjko" src="assets/img/portfolio/$print[img]" alt="..." />
                                
                                   
                                

                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> $print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                                <div class='d-none'>$print[types]</div>
                            </div>
                        </div>
                    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal1-$print[id]" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">$print[text1]</h2>
                                    <p class="item-intro text-muted">$print[text2]</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/$print[img]" alt="..." />
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  


 
                
kku;





echo $txt;
  

            }


        }




if (isset($_FILES['flo'])) {

    

$anun=$_FILES['flo']['name'];
$jamtex=$_FILES['flo']['tmp_name'];
$trip= $conn -> real_escape_string($_POST['tr']);


$ktr=explode('.',$anun);
$name=time().'.'.end($ktr);

if(end($ktr)=='jpg'||end($ktr)=='png'){

    $chanaparh='assets/img/'.$trip.'/'.$name;
move_uploaded_file($jamtex, $chanaparh);

echo trim($name);



}else{

    





echo "nkar @ntri";


}




}







if (isset($_POST['nam1'])&&isset($_POST['nam2'])&&isset($_POST['nam3'])&&isset($_POST['nam4'])) {
    $p1= $conn -> real_escape_string($_POST['nam1']);
    $p2= $conn -> real_escape_string($_POST['nam2']);
    $p3= $conn -> real_escape_string($_POST['nam3']);
    $p4= $conn -> real_escape_string($_POST['nam4']);



    








// header('location:index.php');




$txt=<<<llol
Name-$p1
Email-$p2
Phone-$p3
Message-$p4
llol;


$res=mail('karen.machkalyan@mail.ru','vernagir',$txt);
if ($res) {
    $sql="INSERT INTO `namak`(`name`,`email`,`phone`,`tekst`) VALUES ('$p1','$p2','$p3','$p4')";
$res=mysqli_query($conn,$sql);
    echo "success";
}else{
    echo "error";
}





}







if (isset($_POST['hamar1'])&&isset($_POST['avtoifirma'])&&isset($_POST['masianun'])&&isset($_POST['qanak'])&&isset($_POST['hasce'])) {
    $p1= $conn -> real_escape_string($_POST['hamar1']);
    $p2= $conn -> real_escape_string($_POST['avtoifirma']);
    $p3= $conn -> real_escape_string($_POST['masianun']);
    $p4= $conn -> real_escape_string($_POST['qanak']);
    $p5= $conn -> real_escape_string($_POST['hasce']);





    






$sql="INSERT INTO `zakaz`(`hamar`,`avtoifirma`,`masianun`,`qanak`,`hasce`) VALUES ('$p1','$p2','$p3','$p4','$p5')";
$res=mysqli_query($conn,$sql);
 


header('location:index.php');





}




if (isset($_POST['iid_port'])&&isset($_POST['daata_name'])) {
    $iid= $conn -> real_escape_string($_POST['iid_port']);
    $daata_name= $conn -> real_escape_string($_POST['daata_name']);







$sql="DELETE FROM `$daata_name` WHERE `id`='$iid'";
$res=mysqli_query($conn,$sql);


   


}
























if (isset($_POST['tax11'])) {
    $p1= $conn -> real_escape_string($_POST['tax11']);





$sql="SELECT * FROM `portfolio` WHERE `types` LIKE '%$p1%'";
$res=mysqli_query($conn,$sql);
while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    





                    <div class="col-lg-4 col-sm-6 col-6 mx-auto">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item tngo">
                            <a class="portfolio-link " data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                           
                               
                                
                                <img class="img-fluid jjko" src="assets/img/portfolio/$print[img]" alt="..." />
                                
                                   
                                

                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> $print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                                <div class='d-none'>$print[types]</div>
                            </div>
                        </div>
                    </div>


    <div class="portfolio-modal modal fade" id="portfolioModal1-$print[id]" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">$print[text1]</h2>
                                    <p class="item-intro text-muted">$print[text2]</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/$print[img]" alt="..." />
                                  
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  


 
                
kku;





echo $txt;
  

            }



}






 ?>
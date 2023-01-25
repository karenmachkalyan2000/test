<?php 
session_start();
@$sess=$_SESSION['bubul'];

if ($sess=='cucul') {
    


 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kar Tunin Agency ADMIN</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/k.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->

        <link href="css/lightgallery.css" rel="stylesheet">
        <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/style.css">
        <link href="css/owl.carousel.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />

         

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container ery1">
                <!-- <div class="navbar-brand" href="#page-top"><img src="assets/img/kartuning.png" alt="..." /></div> -->
                <a class='zxa1' href="#page-top">
                    <div class='zxa2'></div>
                    <!-- <img src="assets/img/kartuning.png" alt="..." /> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="btn btn-dark btn-social mx-2"> <a class="nav-link" href="#order"><i class="fa-solid fa-cart-shopping" ></i></a></li>
                        <li class="nav-item"><div class='btn btn-dark btn-social'> <a class="nav-link" href="index.php"><i class="fa-solid fa-right-to-bracket"></i></a></div></li>
                    </ul>
                </div>
            </div>

        </nav>
        <!-- Masthead-->
       <!--  <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header> -->
        <!-- Services-->




 <section class="section-intro  p-0">
    <div class="container-fluid p-0">

                      <?php

            include "dbconn.php";

            $sql="SELECT * FROM `carousel`";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txxxt=<<<kkuu

                    

             <div class="photo-slider-wrap">
            <div class="photo-slider">
                <div class="back-img active" style="background-image: url('assets/img/carousel/$print[img1]')">
                    
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img2]')">
                    
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img3]')">
                    
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img4]')">
                    
                </div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img5]')">
                    
                </div>
            </div>

            <div class="slider-arrow slide-next" id="slide-next">
                <i class="icon icon-right-open-big"></i>
            </div>
            <div class="slider-arrow slide-prev" id="slide-prev">
                <i class="icon icon-left-open-big"></i>
            </div>
        </div>

        <div class="photo-slider-thumb">
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img1]')">
                    
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img2]')">
                    
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img3]')">
                    
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img4]')">
                    
                </div>
            </div>
            <div>
                <div class="back-img" style="background-image: url('assets/img/carousel/$print[img5]')">
                    
                </div>
            </div>
        </div>

      
  


 
                
kkuu;





echo $txxxt;
  

            }


            ?>











           
       

    </div>
    <!-- <div class='div100' id='ghj'>
        <div class='divo jjdu'></div>
        <div class='divo jjdi'></div>
    </div> -->
</section>










        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">

                     <button type="button" class="btn btn-primary " data-bs-toggle="collapse" data-bs-target="#deemo">Add Carousel Photos</button>

                     <form action="action.php" method="post">
                    <div id="deemo" class="collapse col-lg-10 mx-auto row">
                        
                           <div class='ll1 col-lg-2 offset-lg-1'>
                               <input type="hidden" class="vvv1" id="" class="form-control" name='kar1'>
                               <div class='xc1 yy'></div>
                               
                            </div>
                            <div class='ll1 col-lg-2'>
                               <input type="hidden" class="vvv1" id="" class="form-control" name='kar3'>
                               <div class='xc1 uu'></div>
                               
                            </div>
                            <div class='ll1 col-lg-2'>
                               <input type="hidden" class="vvv1" id="" class="form-control" name='kar5'>
                               <div class='xc1 ii' ></div>
                               
                            </div>
                            <div class='ll1 col-lg-2'>
                               <input type="hidden" class="vvv1" id="" class="form-control" name='kar7'>
                               <div class='xc1 oo' ></div>
                               
                            </div>
                            <div class='ll1 col-lg-2'>
                               <input type="hidden" class="vvv1" id="" class="form-control" name='kar9'>
                               <div class='xc1 pp' ></div>
                               
                            </div> 

                               <input type="file" class="flio" class="form-control" data-trip='carousel'>
                               

                             <!--    <div class="col-lg-6 mx-auto border bor inst"></div> -->
                                <button class="btn-success btn">ok</button>
                     </div>   
                         </form>
                  
                
                  <br>

                   <h2 class="section-heading text-uppercase">Services</h2>
                    
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        
                            <div class='iop2'>
                                <img src='imgr/spoiler1.jpg' width="100%">
                            </div>
                        <h4 class="my-3">Spoiler</h4>
                        <p class="text-muted">Making Spoilers</p>
                    </div>
                    <div class="col-md-4">
                        <div class='iop2'>
                            <img src='imgr/bamper.jpg' width="100%">
                        </div>
                        <h4 class="my-3">Bumper</h4>
                        <p class="text-muted">Making Bumpers</p>
                    </div>
                    <div class="col-md-4">
                        <div class='iop2'>
                            <img src='imgr/koleso.jpg' width="100%">
                        </div>
                        <h4 class="my-3">Wheel</h4>
                        <p class="text-muted">Making Wheels</p>
                   
                    </div>
                </div>



<div class="carousel-wrap">
     <div class='jtu1 col-lg-2 offset-lg-5'>
                    <h1>Available</h1>
                </div>
  <div class="owl-carousel">





                     <?php

            include "dbconn.php";

            $sql="SELECT * FROM `portfolio` WHERE `top`='yes'";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txxxxt=<<<kkeuu

                    


      
  
<div class="item"><img src="assets/img/portfolio/$print[img]"></div>

 
                
kkeuu;





echo $txxxxt;
  

            }


            ?>



    




  </div>
</div>








            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                <button type="button" class="btn btn-primary " data-bs-toggle="collapse" data-bs-target="#demo">Add Projects</button>
                    <div id="demo" class="collapse col-lg-5 mx-auto">
                        <form action="action.php" method="post">

                               <input type="text" name="inpp1" id="" class="form-control">
                               <hr>

                               <input type="text" name="inpp2" id="" class="form-control">
                               <hr>
                               <h3>TOP</h3>
                               <hr>
                               <input type="checkbox" name="yuo"  value='yes' checked>
                               <hr>
                               <select name='typeso' class='form-control'>
                                   <option value='spoiler'>spoiler</option>
                                   <option value='bumper'>bumper</option>
                                   <option value='wheel'>wheel</option>
                                   <option value='other'>other</option>
                               </select>
                               <hr>
                               <input type="file" class="flio" class="form-control" data-trip='portfolio'>
                               <hr>
                               <input type="hidden" class="vv1" name="inpp3">

                                <div class="col-lg-6 mx-auto border bor ins"></div>
                                <button class="btn-success btn">ok</button>
                                
                         </form>
                  
                  </div>
                  <br>
                <label>
                    <input type="text" class="inp1" placeholder="SEARCH">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label> 
                    <h2 class="section-heading text-uppercase">Projects</h2>
                   
                </div>

                       

                <div class="row tpich" >






                        <?php

            include "dbconn.php";

            $sql="SELECT * FROM `portfolio` LIMIT 0,3";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    





                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1-$print[id]">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/$print[img]" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"> $print[text1]</div>
                                <div class="portfolio-caption-subheading text-muted">$print[text2]</div>
                            </div>
                            <div class='d-none'>$print[types]</div>
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
                                  
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
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


            ?>










                   





                </div>







                
                <div class='dfg1 text-center'>
                    
<?php 

     include "dbconn.php";

            $sql="SELECT * FROM `portfolio`";
            $res=mysqli_query($conn,$sql);

            $tox=mysqli_num_rows($res);
            // echo '<h1>'.$tox.'</h1>';
            for ($i=1; $i <=ceil($tox/3) ; $i++) { 
                echo "<button class='tyr1'>$i</button>";
            }
 ?>


                </div>



<table class="table">
    
    <tr>
        <td>Text1</td>
        <td>Text2</td>
        <td>Image</td>
        <td>Action</td>
    </tr>



<?php 

            include "dbconn.php";

            $sql="SELECT * FROM `portfolio`";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    
    
    <tr>
        <td>$print[text1]</td>
        <td>$print[text2]</td>
        <td>


               
   <img class="img-fluid" src="assets/img/portfolio/$print[img]" width='200' />
                   

        </td>
        <td>
<button class='btn btn-danger del'  data-name='portfolio' id='$print[id]'>Delete</button>
<button class='btn btn-info' data-bs-toggle="collapse" data-bs-target="#collapseExam-$print[id]">Edit</button>
<div class="collapse" id="collapseExam-$print[id]">

<form action="action.php" method="post">
  <input type='text' class='form-control ' name='imp1' value='$print[text1]'>
  <hr>
  <input type='text' class='form-control ' name='imp2' value='$print[text2]'>
  <hr> 
  <h3>TOP</h3>
  <hr>
  <input type='checkbox' name='rto' class='$print[top]' id='vlio' value='no' >
  <hr>
      
      <select name='typeso' class='form-control' value='$print[types]'>
         <option value='spoiler'>spoiler</option>
         <option value='bumper'>bumper</option>
         <option value='wheel'>wheel</option>
         <option value='other'>other</option>
     </select>                       
  <hr>
  <input type='file' class='form-control flio' data-trip='portfolio'>
  <hr>
  <input type='hidden' class='form-control vv1' name='imp3'  value='$print[img]'>
  <input type='hidden'  name='id' value='$print[id]'>
  <hr>
  <div class='col-lg-6 mx-auto border bor ed'></div>
  <button>OK</button>
  </form>
</div>


        </td>
    </tr>




  
  


 
                
kku;





echo $txt;
  

            }


 ?>



</table>







                  
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container" >
                <div class="text-center">

                        <button type="button" class="btn btn-primary " data-bs-toggle="collapse" data-bs-target="#deemo">Add About</button>
                    <div id="deemo" class="collapse col-lg-5 mx-auto">
                        <form action="action.php" method="post">

                               <input type="text" name="inppp1" id="" class="form-control">
                               <hr>

                               <input type="text" name="inppp2" id="" class="form-control">
                               <hr>

                               <input type="file" class="flio" class="form-control" data-trip='gallery'>
                               <hr>
                               <input type="hidden" class="vv1" name="inppp3">

                                <div class="col-lg-6 mx-auto border bor inss"></div>
                                <button class="btn-success btn">ok</button>
                                
                         </form>
                  
                  </div>
                  <br>


                    <h2 class="section-heading text-uppercase">About</h2>
                    
                </div>
               

<!-- <div class='home'> -->
<!-- <div class="demo-gallery container-fluid"> -->
<ul id="lightgallery" class="list-unstyled row offset-lg-1">
<?php

      include "dbconn.php";

      $sql="SELECT * FROM `gallery`";
      $res=mysqli_query($conn,$sql);
      while ($print=mysqli_fetch_assoc($res)) {
$txxt=<<<kkku

       


 


            

               <li class="col-lg-2 col-xs-6 col-sm-4 col-md-3" data-responsive="assets/img/gallery/$print[img]" data-src="assets/img/gallery/$print[img]" data-sub-html="<h4>$print[text1]</h4><p>$print[text2]</p>">
                    <a href="">
                        <img class="img-fluid" src="assets/img/gallery/$print[img]" alt="Thumb-1">
                    </a>
                </li>
                
                
                 
          

  


 
        
kkku;





echo $txxt;
  

      }


      ?>

  </ul>







        <table class="table">
    
    <tr>
        <td>Text1</td>
        <td>Text2</td>
        <td>Image</td>
        <td>Action</td>
    </tr>



<?php 

            include "dbconn.php";

            $sql="SELECT * FROM `gallery`";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txt=<<<kku

                    
    
    <tr>
        <td>$print[text1]</td>
        <td>$print[text2]</td>
        <td>


               
   <img class="img-fluid" src="assets/img/gallery/$print[img]" width='200' />
                   

        </td>
        <td>

<button class='btn btn-danger del' id='$print[id]' data-name='gallery'>Delete</button>

<button class='btn btn-info' data-bs-toggle="collapse" data-bs-target="#collapseExa-$print[id]">Edit</button>
<div class="collapse" id="collapseExa-$print[id]">

<form action="action.php" method="post">
  <input type='text' class='form-control ' name='impp1' value='$print[text1]'>
  <hr>
  <input type='text' class='form-control ' name='impp2' value='$print[text2]'>
  <hr> 
  <input type='file' class='form-control flio' data-trip='gallery'>
  <hr>
  <input type='hidden' class='form-control vv1' name='impp3' value='$print[img]'>
  <hr>
  <input type='hidden'  name='id1' value='$print[id]'>
  <div class='col-lg-6 mx-auto border bor edd'></div>
  <button>OK</button>
  </form>
</div>

        </td>
    </tr>




  
  


 
                
kku;





echo $txt;
  

            }


 ?>



</table>








    <!-- </div> -->


 <!-- </div> -->







            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/kar1.jpg" alt="..." />
                            <h4>Karen Machkalyan</h4>
                            <p class="text-muted">Our Designer and Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@karen.machkalyan" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/karencik.machkalyan/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/karen.machkalyan/?hl=af" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="team-member cvn1">
                            <img class="mx-auto rounded-circle" src="assets/img/team/nar.jpg" alt="..." />
                            <h4>Narek Durinyan</h4>
                            <p class="text-muted">3D Modeler</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@durinyan1?_t=8YYEyLCkMKY&_r=1" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/narek.durinyan/" aria-label="Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                           <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/durinyan1/" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"></div>
                </div>
            </div>
        </section>
       
        <section id='order' class='ord1'>
            <div class="text-center ">
                    <h1 class="section-heading text-uppercase  jjk2">Order</h1>
                    
                </div>
            
<!-- 
<div class='row col-lg-5 offset-lg-7 jlo1'>
                  <form action="zakaz.php" method="post">
                        
                            <input type="number" name="hamar1" class='form-control mb-2' placeholder="Phone number/*">

                              <select name='avtoi-firma' class='form-control mb-2'>
                                  <option value="bmw">BMW</option>
                                  <option value="mers"> Mercedes-Benz</option>
                                  <option value="audi"> Audi</option>
                                  <option value="kia"> KIA</option>
                                  <option value="toyota"> TOYOTA</option>
                                  <option value="ford"> FORD</option>
                              </select>

                               <select name='masi-anun' class='form-control mb-2'>
                                  <option value="demi-bamper"> Car Front Bumper</option>
                                  <option value="hetevi-bamper"> Car Back Bumper</option>
                                  <option value="bantaj"> Wheel</option>
                                  <option value="spoiler"> Spoiler</option>
                                  <option value="kapot"> Hood</option>
                                  <option value="bagajnik"> Trunk</option>
                                  <option value="padnojka"> Side steps</option>
                                  <option value="opshi-tyuning"> All Tuning</option>
                              </select>

                              <input type="number" name="qanak" class='form-control mb-2' placeholder="Select a quantity/*">

                              <input type="text" name="hasce" class='form-control mb-2' placeholder="Address/*">


                                <div class='text-center'>
                                <button class="btn-success btn fgo1 mb-4">ok</button>
                               </div> 
                               
                         </form>
                         </div>  -->

<div class='zakazner'>
    

        <table class="table">
    
    <tr>
        <td>Phone Number</td>
        <td>Car Name</td>
        <td>Car Part</td>
        <td>Quantity</td>
        <td>Address</td>
    </tr>



<?php 

            include "dbconn.php";

            $sql="SELECT * FROM `zakaz`";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txtq=<<<kkuw

                    
    
    <tr>
        <td>$print[hamar]</td>
        <td>$print[avtoifirma]</td>
        <td>$print[masianun]</td>
        <td>$print[qanak]</td>
        <td>$print[hasce]</td>
        <td><button class='btn btn-danger gel' id='$print[id]' data-name='zakaz'>Delete</button></td>





       
    </tr>




  
  


 
                
kkuw;





echo $txtq;
  

            }


 ?>



</table>





</div>

        </section>





        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Contact Us</h2>
                    
                </div>
                




  <table class="table  grdon2">
    
    <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Message</td>
        
    </tr>



<?php 

            include "dbconn.php";

            $sql="SELECT * FROM `namak`";
            $res=mysqli_query($conn,$sql);
            while ($print=mysqli_fetch_assoc($res)) {
$txtqe=<<<kkuwr

                    
    
    <tr>
        <td>$print[name]</td>
        <td>$print[email]</td>
        <td>$print[phone]</td>
        <td>$print[tekst]</td>
        <td><button class='btn btn-danger gel' id='$print[id]' data-name='namak'>Delete</button></td>
        
       
    </tr>




  
  


 
                
kkuwr;





echo $txtqe;
  

            }


 ?>



</table>






            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start"><a href="tel:+37498-093-544"><b>Phone Number - +37498-093-544</b></a></div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@karen.machkalyan" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/karencik.machkalyan/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/karen.machkalyan/?hl=af" aria-label="LinkedIn"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                       
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->


    
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/jquery.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script> -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

<script src="js/clip_carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>



 




<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
 <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>

          <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  
        <script src="js/scripts.js"></script>


    </body>
</html>
<?php 
}else{
echo '<script>window.location.href="admin/index.html"</script>';
}

 ?>
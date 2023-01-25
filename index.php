<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Kar Tuning Agency</title>
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
        <div class='etrw'><i class="fa-solid fa-phone"></i><a href="tel:+37498-093-544" style='color:black;'><b> +37498-093-544</b></a></div>
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
                        <li class="nav-item"><a class="nav-link" href="#order">Order</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        <li class="nav-item"><div class='btn btn-dark btn-social dfre'> <a class="nav-link" href="#order"><i class="fa-solid fa-cart-shopping" ></i></a></div></li>
                         <li class="nav-item"><div class='btn btn-dark btn-social'> <a class="nav-link" href="admin/index.html"><i class="fa-regular fa-user"></i></a></div></li>
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


   

       
                      <div class='fgro1'>
                        <div class='jdgf'><button class='iqs'>X</button></div>
                       <form action="order.php" method="post">
                        <div class='zakazing' >
        
                        </div>
                        <button class='btn-success btn dsfr' onclick="jndrgo2()">Accept</button>
                    </form>
                    <button class='btn btn-danger agr' onclick="jndrgo()">Delete</button>
                    </div>
   








      






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
</section>








        <section class="page-section  ghy3" id="services">
            <div class="container">
                <div class="text-center mb-5">
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






            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light jjgo" id="portfolio">
            <div class="container">
                <div class="text-center">
                
                    <h2 class="section-heading text-uppercase">Projects</h2>
                   <label>
                    <input type="text" class="inp1 mb-5" placeholder="SEARCH">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </label> <br>
                <button type="button" class="btn btn-light gfd1" data-type=''>All</button>
                <button type="button" class="btn btn-light gfd1" data-type='spoiler'>Spoiler</button>
                <button type="button" class="btn btn-light gfd1" data-type='bumper'>Bumper</button>
                <button type="button" class="btn btn-light gfd1" data-type='wheel'>Wheel</button>
                <button type="button" class="btn btn-light gfd1" data-type='other'>Other</button>
                </div><br>
                <div class="row tpich" >






                        <?php

            include "dbconn.php";

            $sql="SELECT * FROM `portfolio`  LIMIT 0,3";
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
                    <div class="close-modal" data-bs-dismiss="modal"><i class="fa-solid fa-x"></i></div>
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


            ?>










                   





                </div>












<div class='ljk2'>
<button id="slideer" type="button" class="btn btn-link"> <i class="fa-solid fa-left-long"></i></button>
                    
                <div class='dfg1 '>
                    <div id='content'>
                   
<?php 

     include "dbconn.php";

            $sql="SELECT * FROM `portfolio`";
            $res=mysqli_query($conn,$sql);

            $tox=mysqli_num_rows($res);
            // echo '<h1>'.$tox.'</h1>';
            for ($i=1; $i <=ceil($tox/3) ; $i++) { 
                echo "<button class=' button-secondary pure-button btton-secondary tyr1'>$i</button>";
            }
 ?>

            </div>
                </div>
                <button id="slide" type="button" class="btn btn-link"> <i class="fa-solid fa-right-long"></i></button>
</div>
                  
            </div>
        </section>
        <!-- About-->
        <section class="page-section  gndo" id="about">
            <div class="container-fluid" >
                <div class="text-center">
                    <h2 class="section-heading text-uppercase ggfrt">About</h2>
                    
                </div>
               

<!-- <div class='home'> -->
<!-- <div class="demo-gallery container-fluid"> -->
<ul id="lightgallery" class="list-unstyled row">
<?php

      include "dbconn.php";

      $sql="SELECT * FROM `gallery`";
      $res=mysqli_query($conn,$sql);
      while ($print=mysqli_fetch_assoc($res)) {
$txxt=<<<kkku

       


 


            

               <li class="col-lg-2 col-xs-6 col-sm-4 col-6 rounded-5 p-1 mx-auto"  data-responsive="assets/img/gallery/$print[img]" data-src="assets/img/gallery/$print[img]" data-sub-html="<h4>$print[text1]</h4><p>$print[text2]</p>">
                    <a href="">
                        <img class="img-fluid hjy" src="assets/img/gallery/$print[img]" alt="Thumb-1">
                    </a>
                </li>
                
                 
          

  


 
        
kkku;





echo $txxt;
  

      }


      ?>

  </ul>
    <!-- </div> -->


 <!-- </div> -->







            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light fndo" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    
                </div>
                <div class="row">
                    <div class="col-lg-6 col-6">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/kar1.jpg" alt="..." />
                            <h4>Karen Machkalyan</h4>
                            <p class="text-muted">Our Designer and Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@karen.machkalyan" aria-label="Twitter"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/karencik.machkalyan/" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/karen.machkalyan/?hl=af" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-6">
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
            

<div class='row col-lg-5 offset-lg-7 jlo1 p-5'>
                  <!-- <form action="zakaz.php" method="post"> -->
                        
                            <input type="number" name="hamar1" class='form-control mb-2 hamar11' placeholder="Phone number/*">

                              <select name='avtoi-firma' class='form-control mb-2 avto-firma'>
                                  <option value="bmw">BMW</option>
                                  <option value="mers"> Mercedes-Benz</option>
                                  <option value="audi"> Audi</option>
                                  <option value="kia"> KIA</option>
                                  <option value="toyota"> TOYOTA</option>
                                  <option value="ford"> FORD</option>
                              </select>

                               <select name='masi-anun' class='form-control mb-2 mas-anun'>
                                  <option value="demi-bamper"> Car Front Bumper</option>
                                  <option value="hetevi-bamper"> Car Back Bumper</option>
                                  <option value="bantaj"> Wheel</option>
                                  <option value="spoiler"> Spoiler</option>
                                  <option value="kapot"> Hood</option>
                                  <option value="bagajnik"> Trunk</option>
                                  <option value="padnojka"> Side steps</option>
                                  <option value="opshi-tyuning"> All Tuning</option>
                              </select>

                              <input type="number" name="qanak" class='form-control mb-2 qan' placeholder="Select a quantity/*">

                              <input type="text" name="hasce" class='form-control mb-2 hasc' placeholder="Address/*">


                                <div class='text-center'>
                                <button class="btn-success btn fgo1 mb-4"><i class="fa-solid fa-cart-shopping" ></i></button>
                               </div> 
                               
                         <!-- </form> -->
                         </div> 



        </section>





        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Contact Us</h2>
                    
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <!-- <form action="namak.php" method="post"> -->
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control mb-3" id="name" type="text" name='nam1' placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control mb-3" id="email" type="email" name='nam2' placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control mb-3" id="phone" type="tel" name='nam3' placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control jfgt" id="message" name='nam4' placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                                    <div class="ddx" id="submitSuccessMessage">
                                        <div class="text-center text-white mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                          
                                        </div>
                                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn-success btn jkol1">Send Message</button></div>
                <!-- </form> -->
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start" ><a href="tel:+37498-093-544" style='color:black;'><b>Phone Number - +37498-093-544</b></a></div>
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
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

<script src="js/clip_carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>







<script src="https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/js/lightgallery.js"></script>
 <script>
            lightGallery(document.getElementById('lightgallery'));
        </script>
        <script src="js/scripts.js"></script>
    </body>
</html>

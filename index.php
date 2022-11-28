<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Glabal Game Jam 2023 | ANT x DPU Jam Site</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- Site Icons -->
<link rel="shortcut icon" href="" type="image/x-icon" />
<link rel="apple-touch-icon" href="">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="style.css">
<!-- Colors CSS -->
<link rel="stylesheet" href="css/colors.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">
<!-- font family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
<!-- end font family -->
<link rel="stylesheet" href="css/3dslider.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="js/3dslider.js"></script>
<script src="https://aframe.io/releases/1.3.0/aframe.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/donmccurdy/aframe-extras@v6.1.1/dist/aframe-extras.min.js"></script>
<script
   src="https://cdn.rawgit.com/tizzle/aframe-orbit-controls-component/v0.1.14/dist/aframe-orbit-controls-component.min.js"></script>
</head>

<body class="game_info" data-spy="scroll" data-target=".header">
   <!-- LOADER -->
   <div id="preloader">
      <img class="preloader" src="images/loading-img.gif" alt="">
   </div>
   <!-- END LOADER -->
   <section id="top">
      <header>

         <?php include"header.php";?>
         
      </header>
      <div class="full-slider">

         <div id="carousel-example-generic" class="carousel slide">


          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

               <!-- First slide -->
               <div class="item active deepskyblue" data-ride="carousel" data-interval="5000">
                  <div class="carousel-caption">
                     
                     <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">

                        <a-scene  vr-mode-ui="enabled: false">
                           <a-assets>
                              <a-asset-item id="3d" src="models/monk.glb"></a-asset-item>
                           </a-assets>
                           <a-entity id="camera" camera="fov: 40; zoom: 0.5; near:0.005;" position="-3 -1 3" orbit-controls="
                                      autoRotate: false;
                                      target: #target;
                                      enableDamping: true;
                                      dampingFactor: 0.125;
                                      rotateSpeed:0.25;
                                      minDistance:1;
                                      maxDistance:3;
                                      " mouse-cursor="" rotation="0 -20 0">
                              <a-entity geometry="primitive:cone; radius-bottom:1; radius-top:0" scale=".33 1 .33"
                                 position="0 0 2" rotation="30 0 0"
                                 material="color: #fff; transparent: true; opacity:0.1"></a-entity>
                           </a-entity>
                           
                           <a-entity id="target">
                              <a-entity gltf-model="#3d" animation-mixer rotation="0 0 0" position="5 -1 -40"></a-entity>
                           </a-entity>
   
   
                        </a-scene>

                     </div>
                     <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">

                        <div class="slider-contant" data-animation="animated fadeInRight">
                           <h3>BANGKOK, THAILAND<br><span class="color-yellow">College of Creative Design <br/> and Entertainment Technology</span><br>
                           </h3>
                           <p>3 - 5 FEB 2023 แข่งขันพัฒนาเกม 48 ชั่วโมง รับโจทย์พร้อมกันทั่วโลก <br/> มหาวิทยาลัยธุรกิจบัณฑิตย์
                           </p>
                           <a href="register.html" class="btn btn-lg">สมัครสมาชิก Register</a>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /.item -->

               
            </div>
            <!-- /.carousel-inner -->
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
            </a>
         </div>
         <!-- /.carousel -->
         <div class="news">
            <div class="container">
               <div class="heading-slider">
                  <p class="headline"><i class="fa fa-star" aria-hidden="true"></i> 3D Assets by <a href="https://sketchfab.com/tsayuriw">tsayuriw</a> :</p>
                  <!--made by vipul mirajkar thevipulm.appspot.com-->
                  <h1>
                     <a href="" class="typewrite" data-period="2000"
                        data-type='[ "แข่งขันพัฒนาเกม 48 ชั่วโมง รับโจทย์พร้อมกันทั่วโลก, ปีนี้ 2023 มหาวิทยาลัยธุรกิจบัณฑิตย์", "คุณจะเป็นสายไหน Game Developer, Game Designer หรือ Graphic ก็มาเถอะ", "ค่าสมัคร 500 บาท"]'>
                        <span class="wrap"></span>
                     </a>
                  </h1>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </section>



   
   <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
   <!-- ALL JS FILES -->
   <script src="js/all.js"></script>
   <!-- ALL PLUGINS -->
   <script src="js/custom.js"></script>
</body>

</html>
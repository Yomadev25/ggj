<?php
//Login
session_start();
header('Access-Control-Allow-Origin: *');  
include "config.php";
$sess_id=$_SESSION["id"];
$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
$strSQL = "SELECT * FROM ggj 
           WHERE id ='".$sess_id."'";
$objQuery = mysqli_query($objCon,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- Site Metas -->
<title>Game Info</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
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
<!-- font family -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
<!-- end font family -->
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
        <div class="inner-page-banner-profile">
            
        </div>
        <div class="inner-information-text">
            <div class="container">
                
                <h3>Information</h3>
                <ul class="breadcrumb">
                    <li><a href="#">User Information</a></li>
                    <li class="active"><?php echo $objResult["fullname"];?></li>
                </ul>
            </div>
        </div>
    </section>
    <section id="contant" class="contant main-heading team">
        <div class="row">
            <div class="container">
                <div class="contact">

                    <div class="col-md-6">
                        <div class="contact-info">
                            <div class="kode-section-title">
                                <h3>สวัสดี! <?php echo $objResult["fullname"];?></h3>
                            </div>
                            <div class="kode-forminfo">
                                <p>ข้อมูลส่วนตัวของผู้สมัคร</p>
                                <ul class="kode-form-list">
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <p><strong>บัญชี GGJ:</strong> <?php echo $objResult["ggj_user"];?></p>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope-o"></i>
                                        <p><strong>Email:</strong> <?php echo $objResult["email"];?></p>
                                    </li>
                                    <?php
                                        $confirm = $objResult["confirm"];
                                        if($confirm == 0){
                                            $text_confirm = '<span style="color:red;">ยังไม่ได้โอนเงินค่าสมัคร</span>';
                                        }else{
                                            $text_confirm = '<span style="color:green;">โอนเงินค่าสมัครเรียบร้อย</span>';
                                        }
                                    ?>
                                    <li>
                                        <i class="fa fa-user"></i>
                                        <p><strong>Confirm Payment:</strong> <?php echo $text_confirm;?></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contact-us">
                            <form method="post" action="update.php" class="comments-form"
                                id="regisform" enctype="multipart/form-data">
                                <ul>
                                <li style="text-align: left;">แก้ไขข้อมูลผู้สมัคร </li>
                                    <li><input type="text" id="fullname" name="fullname" class="required"
                                            placeholder="Fullname *" required value="<?php echo $objResult["fullname"];?>">
                                    </li>
                                    <li><input type="text" id="email" name="email" class="required email"
                                            placeholder="Email *" required value="<?php echo $objResult["email"];?>"></li>
                                    <?php 
                                        $transfer = $objResult["transfer"];
                                        if($transfer == ""){
                                    ?>
                                        <li style="text-align: left;">อัพโหลดหลักฐานการโอนเงิน<br/>
                                        ไฟล์รูปภาพหลักฐาน นามสกุล .png, .jpg เข้าสู่ระบบ
                                        </li>
                                        <li><input type="file" name="fileToUpload" id="fileToUpload"></li>
                                    <?php }else{ ?>
                                        <li style="text-align: left;"><a href="uploads/<?php echo $objResult["transfer"];?>" target="_blank"><img src="uploads/<?php echo $objResult["transfer"];?>" style="width:80px; height:80px;"/><br/>คลิกเพื่อดูหลักฐานการโอนเงิน</a></li>
                                    <?php }?>
                                    <li><input class="btn" type="submit" value="Update ข้อมูลสมาชิก"></li>
                                </ul>
                                <div class="hidden-me" id="contact_form_responce">
                                    <p></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer id="footer" class="footer">
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="full">
                  <div class="footer-widget">
                     <div class="footer-logo">
                        <a href="#"><img src="images/logo.png" alt="#" /></a>
                     </div>
                     <p>สถานที่จัดการแข่งขั้น Maker Space มหาวิทยาลัยธุรกิจบัณฑิตย์, อาคาร 6 ชั้น 3 <br/> 110/1-4 ถนนประชาชื่น
                                            หลักสี่ กทม 10210</p>
                     <ul class="social-icons style-4 pull-left">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-2">
               <div class="full">
                  <div class="footer-widget">
                     <h3>Menu</h3>
                     <ul class="footer-menu">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="https://fb.me/ANTDPU">Facebook</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="full">
                  <div class="footer-widget">
                     <h3>Contact us</h3>
                     <ul class="address-list">
                        <li><i class="fa fa-map-marker"></i> อาคาร 6 ชั้น 3 มหาวิทยาลัยธุรกิจบัณฑิตย์ 110/1-4 ถนนประชาชื่น
                                            หลักสี่ กทม 10210</li>
                        <li><i class="fa fa-phone"></i> +662-954-7300 Ext. 243, 714, 252</li>
                        <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> ant@dpu.ac.th</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-3">
               <div class="full">
                  <div class="contact-footer">
                     <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15493.862167388737!2d100.5513308!3d13.8710891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd13a7fca800df079!2z4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LiE4Lij4Li14LmA4Lit4LiX4Li14Lif4LiU4Li14LmE4LiL4LiZ4LmMIOC5geC4reC4meC4lOC5jCDguYDguK3guYfguJnguYDguJXguK3guKPguYzguYDguJfguJnguYDguKHguJnguJXguYwg4LmA4LiX4LiE4LmC4LiZ4LmC4Lil4Lii4Li1!5e0!3m2!1sen!2sth!4v1669622103448!5m2!1sen!2sth"
                        width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="footer-bottom">
         <div class="container">
            <p>Copyright © 2023 College of Creative Design and Entertainment Technology. All rights reserved.</p>
         </div>
      </div>
   </footer>
    <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>
</body>

</html>
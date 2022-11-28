<?php error_reporting(0);?>
<div class="container">
            <div class="header-top">
               <div class="row">
                  <div class="col-md-6">
                     <div class="full">
                        <div class="logo">
                           <a href="./"><img src="images/logo.png" alt="#" /></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="right_top_section">
                        <!-- social icon -->
                        <ul class="social-icons pull-left">
                           <li><a class="facebook" href="https://fb.me/antdpu"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="https://mobile.twitter.com/antcreativedpu"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="https://www.youtube.com/channel/UCpB-sR4dPtS6VHpWhZJRqJA"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                        <!-- end social icon -->
                        <!-- button section -->
                        <ul class="login">
                        <?php
                        $sess_id=$_SESSION["id"];
                        if($sess_id == ""){
                        ?>
                           <li class="login-modal">
                              <a href="login.html" class="login"><i class="fa fa-user"></i>Login</a>
                           </li>
                           <li>
                              <div class="cart-option">
                                 <a href="register.html"><i class="fa fa-shopping-cart"></i>Register</a>
                              </div>
                           </li>
                        <?php }else{ ?>
                            <li>
                              <div class="cart-option">
                                 <a href="profile.php"><i class="fa fa-user"></i>Profile <?php echo $_SESSION["fullname"];?></a>
                              </div>
                           </li>
                            <?php }?>
                        </ul>
                        <!-- end button section -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="header-bottom">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="main-menu-section">
                           <div class="menu">
                              <nav class="navbar navbar-inverse">
                                 <div class="navbar-header">
                                    <button class="navbar-toggle" type="button" data-toggle="collapse"
                                       data-target=".js-navbar-collapse">
                                       <span class="sr-only">Toggle navigation</span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                       <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand" href="#">Menu</a>
                                 </div>
                                 <div class="collapse navbar-collapse js-navbar-collapse">
                                    <ul class="nav navbar-nav">
                                       <li class="active"><a href="./">Home</a></li>
                                       <li><a href="https://globalgamejam.org/2023/jam-sites/ant-x-dhurakij-pundit-university">About Jam Site (เข้าสมัคร Jam Site GGJ 2023)</a></li>
                                       
                                       <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                 </div>
                                 <!-- /.nav-collapse -->
                              </nav>
                              <div class="search-bar">
                                    <div id="imaginary_container">
                                       <img src="https://ant.dpu.ac.th/gamejam/images/dpu.png" class="small_logo"/>
                                    </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
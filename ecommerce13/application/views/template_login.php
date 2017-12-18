<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <link href="<?php echo base_url() ?>template/youth_fashion/css/bootstrap3/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>template/youth_fashion/css/bootstrap3/login-register.css">
    <link href="<?php echo base_url() ?>template/youth_fashion/css/login-register.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    
    <script src="<?php echo base_url() ?>template/youth_fashion/js/jquery/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>template/youth_fashion/js/bootstrap3/js/bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>template/youth_fashion/js/login-register.js" type="text/javascript"></script>

<link href="<?=base_url() ?>template/youth_fashion/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>
<body>
    <!--header-->
<div class="header">
    <div class="header-top">
        <div class="container">
                <div class="col-sm-4 logo animated wow fadeInLeft" data-wow-delay=".5s">
                    <h1><a href="index.html">Youth <span>Fashion</span></a></h1>    
                </div>
            <div class="col-sm-4 world animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="cart box_1">
                        <img src="<?=base_url() ?>template/youth_fashion/images/cart.png" alt=""/><?php echo anchor('cart/shopcart','Cart')?>
                        <h3> <div class="total">
                            <span>
                                
                                </span></div>
                            </h3>
                        </a>
                        <p></li></p>

                    </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                    <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                    <p>Call me</p>
           
        </div>
    </div>
        <div class="container">
            <div class="head-top">

            
                
        <div class="clearfix"> </div>
            <!---pop-up-box---->   
                    <link href="<?=base_url() ?>template/youth_fashion/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="<?=base_url() ?>template/youth_fashion/js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
                <div id="small-dialog" class="mfp-hide">
                <div class="search-top">
                        <div class="login">
                            <form action="#" method="post">
                                <input type="submit" value="">
                                <input type="text" name="search" value="Type something..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">        
                            
                            </form>
                        </div>
                        <p> Shopping</p>
                    </div>              
                </div>
                 <script>
                        $(document).ready(function() {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });
                                                                                        
                        });
                </script>           
    <!---->     
        </div>
    </div>


    <!--MODAL REGISTER LOGIN -->
    <div class="container">
         <div class="modal fade login" id="loginModal">
              <div class="modal-dialog login animated">
                  <div class="modal-content">
                     <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login with</h4>
                    </div>
                    <div class="modal-body">  




                        <div class="box">
                             <div class="content">
                                <div class="social">
                                    <a class="circle github" href="/auth/github">
                                        <i class="fa fa-github fa-fw"></i>
                                    </a>
                                    <a id="google_login" class="circle google" href="/auth/google_oauth2">
                                        <i class="fa fa-google-plus fa-fw"></i>
                                    </a>
                                    <a id="facebook_login" class="circle facebook" href="/auth/facebook">
                                        <i class="fa fa-facebook fa-fw"></i>
                                    </a>
                                </div>
                                <div class="division">
                                    <div class="line l"></div>
                                      <span>or</span>
                                    <div class="line r"></div>
                                </div>
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="" accept-charset="UTF-8">
                                    
                                    <input id="username" class="form-control" type="text" placeholder="username" name="username">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <button type="submit" name="login" id="login" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                             </div>
                        </div>






                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                 <form role="form" action="" method="post" class="registration-form">
                                    <div class="alert alert-info <?= (isset($msg))?"":"hidden" ?>">
                                        <p><?= (isset($msg))?$msg:"" ?></p>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="username" id="username" placeholder="Username..." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="email" placeholder="Email..." class="form-email form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="text" name="password" placeholder="Password..." class="form-password form-control" id="password">
                                    </div>
                                    <button type="submit" name="signup" id="signup" class="btn">Sign me up!</button>
                                    <br>
                                </form>
                                </div>
                            </div>
                        </div>













                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer">
                            <span>Looking to 
                                 <a href="javascript: showRegisterForm();">create an account</a>
                            ?</span>
                        </div>
                        <div class="forgot register-footer" style="display:none">
                             <span>Already have an account?</span>
                             <a href="javascript: showLoginForm();">Login</a>
                        </div>
                    </div>        
                  </div>
              </div>
          </div>
    </div>
     <!--END MODAL REGISTER LOGIN -->


<!--content-->
<!-- end content -->


<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
                <h3>Login</h3>
                <div class="social-icons">
                    <p><a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></p>
                 </div>
            </div>
            <div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
                <h3>Register</h3>
                    <p><a class="btn big-login" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">Log in</a></p>
            </div>
            <div class="clearfix"> </div>   
        </div>  
    </div>
        <div class="footer-bottom">
        <div class="container">
                <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                    <h6>Categories</h6>
                    <ul>
                        <?php
                        $main_kategori = $this->db->get_where('tabel_kategori',array('parent'=>0));
                        foreach ($main_kategori->result() as $k) {
                            $sub_kategori = $this->db->get_where('tabel_kategori',array('parent'=>$k->kategori_id));
                            if($sub_kategori->num_rows()>0){

                           
                        } else {
                             echo "<li>".anchor($k->link,$k->nama_kategori)."</li>";
                        }
                        }
                        ?>
                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate animated wow fadeInLeft" data-wow-delay=".5s">
                    <h6>Feature Projects</h6>
                    <ul>
                        <li><a href="products.html">Dignissim purus</a></li>
                        <li><a href="men.html">Curabitur sapien</a></li>
                        <li><a href="single.html">Tempus pretium</a></li>
                        <li><a href="men.html">Dignissim neque</a></li>
                        <li><a href="products.html">Ornared id aliquet</a></li>
                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate animated wow fadeInRight" data-wow-delay=".5s">
                    <h6>Top Brands</h6>
                    <ul>
                        <li><a href="products.html">Tempus pretium</a></li>
                        <li><a href="single.html">Curabitur sapien</a></li>
                        <li><a href="men.html">Dignissim purus</a></li>
                        <li><a href="single.html">Dignissim neque</a></li>
                        <li><a href="men.html">Ornared id aliquet</a></li>
                        
                        
                    </ul>
                </div>
                <div class="col-md-3 footer-bottom-cate cate-bottom animated wow fadeInRight" data-wow-delay=".5s">
                    <h6>Our Address</h6>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 12th Avenue, 5th block, <span>Sydney.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
                <p class="footer-class animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;"> © 2016 Youth Fashion . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
    </div>
</div>
</body>
</html>

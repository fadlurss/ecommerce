<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link href="<?=base_url() ?>template/youth_fashion/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?=base_url() ?>template/youth_fashion/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?=base_url() ?>template/youth_fashion/css/style.css" rel="stylesheet" type="text/css" media="all" />  
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="<?=base_url() ?>template/youth_fashion/js/bootstrap.min.js"></script>
<script src="<?=base_url() ?>template/youth_fashion/js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="<?=base_url() ?>template/youth_fashion/js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
        auto: false,
        speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="<?=base_url() ?>template/youth_fashion/css/animate.min.css" rel="stylesheet"> 
<script src="<?=base_url() ?>template/youth_fashion/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
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
<!-- //animation-effect -->
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
                        <a href="checkout.html">
                        <h3> <div class="total">
                            <span class="simpleCart_total"></span></div>
                            <img src="<?=base_url() ?>template/youth_fashion/images/cart.png" alt=""/></h3>
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

                    </div>
            </div>
            <div class="col-sm-2 number animated wow fadeInRight" data-wow-delay=".5s">
                    <span><i class="glyphicon glyphicon-phone"></i>085 596 234</span>
                    <p>Call me</p>
                </div>
            <div class="col-sm-2 search animated wow fadeInRight" data-wow-delay=".5s">     
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><i class="glyphicon glyphicon-search"> </i> </a>
            </div>
                <div class="clearfix"> </div>
        </div>
    </div>
        <div class="container">
            <div class="head-top">
            <div class="n-avigation">
            
                <nav class="navbar nav_bottom" role="navigation">
                
                 <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header nav_2">
                      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#"></a>
                   </div> 
                   <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="index.html">Home</a></li>
                            <?php 
                                $parent = $this->db->get_where('tabel_menu',array('parent'=>0));

                                foreach ($parent->result() as $p) 
                                {
                                    #check dulu 
                                    $child = $this->db->get_where('tabel_menu',array('parent'=>$p->menu_id));
                                    if($child->num_rows()>0){
                                        #tampilkan sub menu
                                        echo "<li class='dropdown'>".anchor("#",$p->menu_title)."<i class='fa fa-angle-down'></i>";
                                        echo "<ul role='menu' class='sub-menu'>";
                                        foreach ($child->result() as $c) {
                                             echo "<li>".anchor($c->link, $c->menu_title)."</li>";
                                        }
                                        echo "</ul></li>";
                                    } else {
                                        #tampilkan menu
                                        echo "<li>".anchor($p->link, $p->menu_title)."</li>";
                                    }
                                }
                            ?>
                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<span class="caret"></span></a>             
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div class="tab-pane active" id="men">
                                            <ul class="nav-list list-inline">
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t7.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t8.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t9.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t11.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t1.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="women.html"><img src="<?=base_url() ?>template/youth_fashion/images/t12.jpg" class="img-responsive" alt=""/></a></li>
                                            </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <!-- Nav tabs -->
                                                    
                                </div>              
                            </li>
                            <li class="dropdown mega-dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<span class="caret"></span></a>               
                                <div class="dropdown-menu mega-dropdown-menu">
                                    <div class="container-fluid">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                          <div class="tab-pane active" id="men">
                                            <ul class="nav-list list-inline">
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t10.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t2.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t3.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t4.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t5.jpg" class="img-responsive" alt=""/></a></li>
                                                <li><a href="men.html"><img src="<?=base_url() ?>template/youth_fashion/images/t6.jpg" class="img-responsive" alt=""/></a></li>
                                            </ul>
                                          </div>
                                         
                                       </div>
                                    </div>
                                    <!-- Nav tabs -->
                                                       
                                </div>              
                            </li>
                            <li><a href="products.html">Products</a></li>
                            <li><a href="account.html">Sign In</a></li>
                            <li class="last"><a href="contact.html">Contact</a></li>
                        </ul>
                     </div><!-- /.navbar-collapse -->
                  
                </nav>
            </div>
            
                
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
</div>
<!--banner-->
<div class="banner">
    <div class="matter-banner">
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <img src="<?=base_url() ?>template/youth_fashion/images/1.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                     </li>
                     <li>
                        <img src="<?=base_url() ?>template/youth_fashion/images/3.jpg" alt=""> 
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>                  
                     </li>
                     <li>
                        <img src="<?=base_url() ?>template/youth_fashion/images/2.jpg" alt="">
                        <div class="tes animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            <h2>MEN & WOMEN</h2>
                            <h3>Trousers & Chinos</h3>
                            <h4>UPTO 50%</h4>
                            <p>OFFER</p>
                        </div>
                    </li>   
                </ul>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>

<!--content-->
    <?php 
        echo $contents;
    ?>
<!-- end content -->


<div class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="col-md-6 top-footer animated wow fadeInLeft" data-wow-delay=".5s">
                <h3>Follow Us On</h3>
                <div class="social-icons">
                    <ul class="social">
                        <li><a href="#"><i></i></a> </li>
                        <li><a href="#"><i class="facebook"></i></a></li>   
                        <li><a href="#"><i class="google"></i> </a></li>
                        <li><a href="#"><i class="linked"></i> </a></li>                        
                    </ul>
                        <div class="clearfix"></div>
                 </div>
            </div>
            <div class="col-md-6 top-footer1 animated wow fadeInRight" data-wow-delay=".5s">
                <h3>Newsletter</h3>
                    <form action="#" method="post">
                        <input type="text" name="email" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
                        <input type="submit" value="SUBSCRIBE">
                    </form>
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
<script src="<?=base_url() ?>template/youth_fashion/js/jquery.min.js"></script>
<script src="<?=base_url() ?>template/youth_fashion/js/imagezoom.js"></script>
<!-- start menu -->
<script type="text/javascript" src="<?=base_url() ?>template/youth_fashion/js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="<?=base_url() ?>template/youth_fashion/js/simpleCart.min.js"> </script>
<!--initiate accordion-->
                        <script type="text/javascript">
                            $(function() {
                                var menu_ul = $('.menu-drop > li > ul'),
                                       menu_a  = $('.menu-drop > li > a');
                                menu_ul.hide();
                                menu_a.click(function(e) {
                                    e.preventDefault();
                                    if(!$(this).hasClass('active')) {
                                        menu_a.removeClass('active');
                                        menu_ul.filter(':visible').slideUp('normal');
                                        $(this).addClass('active').next().stop(true,true).slideDown('normal');
                                    } else {
                                        $(this).removeClass('active');
                                        $(this).next().stop(true,true).slideUp('normal');
                                    }
                                });
                            
                            });
                        </script>
                        <!-- FlexSlider -->
  <script defer src="<?=base_url() ?>template/youth_fashion/js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?=base_url() ?>template/youth_fashion/css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
                    <link href="<?=base_url() ?>template/youth_fashion/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                    <script src="<?=base_url() ?>template/youth_fashion/js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!---//pop-up-box---->
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
</body>
</html>
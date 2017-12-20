<br><br>
<!--//content-->
    <div class="con-tp">
        <div class="container">
            <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                        <h4>30%offer</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                <a href="products.html">            
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
                            <div class="info-box">
                                <div class="info-content simpleCart_shelfItem">
                                        <h4>45%offer</h4>   
                                </div>
                            </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
                <a href="products.html">
                    <div class="content-grid-effect slow-zoom vertical">
                        <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
                            <div class="info-box">
                                <div class="info-content simpleCart_shelfItem">
                                        <h4>50%offer</h4>   
                                </div>
                            </div>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                    <h4>25%offer</h4>   
                            </div>
                        </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                    <h4>50%offer</h4>   
                            </div>
                        </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
            <a href="products.html">
                <div class="content-grid-effect slow-zoom vertical">
                    <div class="img-box"><img src="<?=base_url() ?>template/youth_fashion/images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
                        <div class="info-box">
                            <div class="info-content simpleCart_shelfItem">
                                    <h4>35%offer</h4>   
                            </div>
                        </div>
                </div>
            </a>
        </div>
        
    </div>
    <div class="c-btm">
        
        <div class="content-top1">
            <div class="container">
               <?php foreach ($product->result() as $p) { ?>
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                     
                    <div class="col-md1 simpleCart_shelfItem">
                            <img class="img-responsive" src="<?=base_url().'gambar_product/'. $p->gambar ?>" alt=""/>
                        </a>
                        <h3><a href="single.html"><?= $p->nama_product?></a></h3>
                        <div class="price">
                                <h5 class="item_price">Rp.  <?= $p->harga?></h5>
                                <?php
                                            echo anchor('product/'.$p->nama_product_seo,'<i class="fa fa-shopping-cart"></i> Detail',array('class'=>'btn btn-default add-to-cart'))
                                            ?>
                                <div class="clearfix"> </div>
                        </div>
                        
                    </div>
                      
                </div>
                <?php } ?>  
            <!-- <div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="<?=base_url() ?>template/youth_fashion/images/pi12.png" alt="" />
                        </a>
                        <h3><a href="single.html">Formal</a></h3>
                        <div class="price">
                                <h5 class="item_price">$400</h5>
                                <a href="#" class="item_add">Add To Cart</a>
                                <div class="clearfix"> </div>
                        </div>
                        
                    </div>
                </div>   -->
            <div class="clearfix"> </div>
          
            </div>  
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
                                    <form method="post" action="<?= base_url(). "cart/login_user" ;?>" accept-charset="UTF-8">
                                    <input id="email" class="form-control" type="email" placeholder="email" name="email" required="">
                                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                                    <button type="submit" name="login" id="login" class="btn btn-primary">Login</button>
                                    </form>
                                </div>
                             </div>
                        </div>






                        <div class="box">
                            <div class="content registerBox" style="display:none;">
                             <div class="form">
                                 <form role="form" action="<?= base_url(). "cart/register" ;?>" method="post" class="registration-form">
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
                                        <label class="sr-only" for="form-nama_lengkap">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap..." class="form-nama_lengkap form-control" id="nama_lengkap">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-no_hp">Nomor Handphone</label>
                                        <input type="text" name="no_hp" placeholder="No Hp..." class="form-no_hp form-control" id="no_hp">
                                    </div>
                                     <div class="form-group">
                                        <label class="sr-only" for="form-email">Alamat</label>
                                        <textarea name="alamat" id="alamat"></textarea>
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
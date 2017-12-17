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
        <?php foreach ($product->result() as $p) { ?>
        <div class="content-top1">
            <div class="container">
               
                <div class="col-md-4 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                     
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
        <?php } ?>
    </div>
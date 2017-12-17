                    <div class="col-sm-9 padding-right">
                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">Features Items</h2>
                            
                            <?php
                            foreach ($product->result() as $p)
                            {
                                ?>
                            

                            <div class="col-sm-4">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo base_url().'gambar_product/'. $p->gambar?>" alt="" width="200" height="200" />
                                            <h2><?php echo $p->harga?></h2>
                                            <p><?php echo $p->nama_product?></p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            <?php
                                            echo anchor('product/'.$p->nama_product_seo,'<i class="fa fa-shopping-cart"></i> Detail',array('class'=>'btn btn-default add-to-cart'))
                                            ?>
                                        </div>
                                        <div class="product-overlay">
                                            <div class="overlay-content">
                                                <h2><?php echo $p->harga?></h2>
                                                <p><?php echo $p->nama_product?></p>
                                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                                               <?php
                                            echo anchor('product/'.$p->nama_product_seo,'<i class="fa fa-shopping-cart"></i> Detail',array('class'=>'btn btn-default add-to-cart'))
                                            ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                            // end looping product
                            }
                            ?>
                            
                        </div><!--features_items-->

                        

                                                </div>
                                            </div>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                                <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                                    <i class="fa fa-angle-right"></i>
                                </a>			
                            </div>
                        </div><!--/recommended_items-->
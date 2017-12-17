<div class="col-sm-9 padding-right">
    <div class="col-sm-3">
        <div class="shopper-info">
            <p>Shopper Information</p>
            <form>
                <input type="text" placeholder="Display Name">
                <input type="text" placeholder="User Name">
                <input type="password" placeholder="Password">
                <input type="password" placeholder="Confirm password">
            </form>
            <a class="btn btn-primary" href="">Get Quotes</a>
            <a class="btn btn-primary" href="">Continue</a>
        </div>
    </div>


</div><!--/recommended_items-->
<Br><br>
<hr style="border: dotted 1px seagreen;margin-top: 20px;">
<br>

<div class="col-sm-9 padding-right">
    <section id="cart_items">
        <div class="table-responsive cart_info">
            <?php
            echo form_open('cart/update_stok');
            ?>
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $total = 0;
                    foreach ($item as $i) {
                        ?>
                        <tr>
                            <td  class="cart_product" width="200">
                                <a href=""><img src="<?php echo base_url() ?>gambar_product/<?php echo $i->gambar ?>" alt="" width="110" height="110"></a>
                            </td>
                            <td class="cart_description">
                                <h4><a href=""><?php echo $i->nama_product; ?></a></h4>
                                <p>Web ID: 1089772</p>
                            </td>
                            <td class="cart_price">
                                <p>Rp <?php echo $i->harga ?></p>
                            </td>
                            <td class="cart_quantity">
                                <div class="cart_quantity_button">
                                    <a class="cart_quantity_up" href=""> + </a>
                                    <input type="hidden" name="id<?php echo $i->detail_id ?>" value="<?php echo $i->detail_id ?>">
                                    <input class="cart_quantity_input" type="text" name="quantity<?php echo $i->detail_id ?>" value="<?php echo $i->qty ?>" autocomplete="off" size="2">
                                    <a class="cart_quantity_down" href=""> - </a>
                                </div>
                            </td>
                            <td class="cart_total">
                                <p class="cart_total_price">
                                    <?php
                                    $subtotal = $i->harga * $i->qty;
                                    echo $subtotal;
                                    $total = $total + $subtotal;
                                    ?>
                                </p>
                            </td>
                            <td class="cart_delete">
                                <a class="cart_quantity_delete" href="<?php echo base_url() . 'cart/hapus_item/' . $i->detail_id ?>"><i class="fa fa-times"></i></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>


                </tbody>
            </table>
        </div>
        <div class="total_area">
            <ul>
                <li>Total <span>Rp <?php echo $total; ?></span></li>
            </ul>
            <a class="btn btn-default check_out" href="">Check Out</a>
            <button type="submit" class="btn btn-default check_out">Update</button>
        </div>
</div>
</form>
</section> <!--/#cart_items-->
</div><!--/recommended_items-->
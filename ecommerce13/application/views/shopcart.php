<div class="container">
  <div class="check-out">
    <h2>Checkout</h2>
      <?php
            echo form_open('cart/update_stok');
      ?>
      <table>
          <thead>
            <tr>
              <th>Item</th>
              <th>Qty</th>    
              <th>Size</th>
              <th>Prices</th>
              <th>Sub total</th>
            </tr>
          </thead>
          <tbody>
            <?php
                    $total = 0;
                    if($item->num_rows()==0)
                    {
                        echo "<tr><td>KERANJANG BELANJA ANDA MASIH KOSONG</td></tr>";
                    }else{
                    foreach ($item->result() as $i) {
            ?>
            <tr>
              <td class="ring-in">
                <a href="single.html" class="at-in">
                  <img src="<?php echo base_url() ?>gambar_product/<?php echo $i->gambar ?>" class="img-responsive" alt="">
                </a>
              <div class="sed">
                <h5><?php echo $i->nama_product; ?></h5>
              </div>
              <div class="clearfix"> </div></td>
              <td>
                <input type="hidden" name="id<?= $i->detail_id?>" value="<?= $i->detail_id?>">
                <input class="cart_quantity_input" type="text" name="qty<?= $i->detail_id?>" value="<?= $i->qty ?>" autocomplete="off" size="2">
              </td>    
              <td>
                <input type="hidden" name="id<?php echo $i->detail_id?>" value="<?= $i->detail_id?>">
                <input class="cart_size_input" type="text" name="size<?= $i->detail_id?>" value="<?= $i->size ?>" autocomplete="off" size="2">
              </td>
              <td>Rp <?php echo $i->harga ?></td>
              <td>Rp 
                <?php
                    $subtotal=$i->harga * $i->qty;
                    echo $subtotal;
                    $total=$total+$subtotal;
                    ?>
              </td>
            </tr>
             <?php
                }}
              ?>
              <th colspan="4">TOTAL</th>
              <td>Rp <?php echo $total;?></td>
          </tbody>
      </table>
      <?php
            echo anchor('cart/checkout','Check Out',array('class'=>'btn btn-default check_out'));?>
            <button type="submit" class="btn btn-default check_out">Update</button>
        </div>
      </form>
  </div>
</div>
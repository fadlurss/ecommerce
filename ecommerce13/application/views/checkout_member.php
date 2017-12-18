<div class="col-sm-9">
    <div class="shopper-info">
        <p>Shopper Information</p>
        <?php echo form_open('cart/checkout');?>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" value="<?php echo $member['nama_lengkap']?>">
            <input type="email" name="email" placeholder="Email" value="<?php echo $member['email']?>">
            <input type="text" name="no_hp" placeholder="No HP" value="<?php echo $member['no_hp']?>">
            <input type="text" name="telpon" placeholder="No Telpon" value="<?php echo $member['no_telpon']?>">
            <textarea name="alamat" placeholder="Alamat"><?php echo $member['alamat']?></textarea>

        <button type="submit" name="submit" class="btn btn-primary">Selesai</button>
                </form>
    </div>
</div>
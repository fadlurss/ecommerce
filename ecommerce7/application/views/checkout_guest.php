<div class="col-sm-9">
    <div class="shopper-info">
        <p>Shopper Information</p>
        <?php echo form_open('cart/checkout_guest');?>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required >
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="no_hp" placeholder="No HP" required>
            <input type="text" name="telpon" placeholder="No Telpon" required>
            <textarea name="alamat" placeholder="Alamat"></textarea>

        <button type="submit" name="submit" class="btn btn-primary">Selesai</button>
                </form>
    </div>
</div>
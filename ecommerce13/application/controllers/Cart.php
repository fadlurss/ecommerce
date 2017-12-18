<?php

class cart extends CI_Controller {


        public function __construct() {
        parent:: __construct();
        $this->load->model("Users");
        $this->session->nama;
    }
    
        
    public function register() {
        $data = array();
        if (isset($_POST["signup"])) {
            $post = $this->input->post(null, true);
            $users = $this->Users;
            if ($post["username"] != "" && $post["email"] != "" && $post["password"] != "") {
                $users->setUsername($post["username"]);
                $users->setEmail($post["email"]);
                $users->setPassword(md5($post["password"]));
                $ins = $users->save();
                if ($ins) {
                    redirect(base_url('home'));
                } else {
                    $data["msg"] = "Data Gagal Di Simpan";
                }
            } else {
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view('home',$data);
    }

    public function login_user() {
        $data = array();
        if(isset($_POST["login"])){
            $post  = $this->input->post(null,true);
            $users = $this->Users;
            if($post["username"] != "" && $post["password"]){
                if($users->find("username",$post["username"])->num_rows() > 0){
                    if($users->find("password",md5($post["password"]))->num_rows() > 0){
                        $id_users = $users->find("username",$post["username"]);
                        $this->session->set_userdata("nama",$post["username"]);
                        $this->session->set_userdata("id_users",$id_users->row()->id_users);
                        $data["msg"] = "Login Berhasil";
                        redirect(base_url("home"));
                    }else{
                        $data["msg"] = "Password Salah";
                    }
                }else{
                    $data["msg"] = "Username Salah";
                }
            }else{
                $data["msg"] = "Oops Fill All Field";
            }
        }
        $this->load->view('home',$data);
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }

    function add_tocart() {
        $product_data = array(
            'product_id'    => $this->input->post('product_id', TRUE),
            'size'          => $this->input->post('size', TRUE),
            'qty'           => $this->input->post('qty', TRUE),
            'ip'            => $_SERVER['REMOTE_ADDR'],
            'transaksi_id'  => 0);
        $this->db->insert('tabel_transaksi_detail', $product_data);
        redirect('cart/shopcart');
    }

    function shopcart() {
        $query = "SELECT tb1.*,tb2.nama_product,tb2.gambar,tb2.harga
                FROM tabel_transaksi_detail as tb1, tabel_product as tb2 
                WHERE tb1.product_id=tb2.product_id and tb1.transaksi_id=0
                order by tb1.detail_id";
        $data['item'] = $this->db->query($query);
        $this->template->load('template', 'shopcart', $data);
    }

    function hapus_item($id) {
        $this->db->where('detail_id', $id);
        $this->db->delete('tabel_transaksi_detail');
        redirect('cart/shopcart');
    }

    function update_stok() {
        $list = $this->db->query("select * from tabel_transaksi_detail order by detail_id");
        foreach ($list->result() as $l) {
            $id = $this->input->post('id' . $l->detail_id);
            $new_qty = $this->input->post('qty' . $l->detail_id);
            $new_size = $this->input->post('size' . $l->detail_id);
            $this->db->where('detail_id', $id);
            $this->db->update('tabel_transaksi_detail', array('qty' => $new_qty, 'size' => $new_size));
//           echo $this->input->post('quantity'.$l->detail_id). '<br>';
//           echo $this->input->post('size'.$l->detail_id). '<br>';
        }
        redirect('cart/shopcart');
    }

    function checkout_guest() {
        //  registerkan member
        $data = array(
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('no_hp'),
            'no_telpon' => $this->input->post('telpon'),
            'alamat' => $this->input->post('alamat'));
        $this->db->insert('tabel_member', $data);
        // set settion nya sehingga menjadi login
  
        $this->session->set_userdata(array('nama' => $this->input->post('nama_lengkap'), 'status_login' => 'sudah_login'));
        // panggil method chekout
        
        $this->proses_chekout();
        $this->template->load('template', 'berhasil');
        
    }

    function proses_chekout() {
        $member = $this->db->get_where('tabel_member', array('nama_lengkap' => $this->session->userdata('nama')))->row_array();
        $transaksi = array(
            'member_id' => $member['member_id'],
            'tanggal' => date("Y-m-d"),
            'status' => 1,
            'no_resi' => ''
        );
        $this->db->insert('tabel_transaksi', $transaksi);
        $listProduct = $this->db->get_where('tabel_transaksi_detail', array('ip' => $_SERVER['REMOTE_ADDR']));
        $lastTransaksi = $this->db->get_where('tabel_transaksi', $transaksi)->row_array();
        foreach ($listProduct->result() as $l) {
            $this->db->where('detail_id', $l->detail_id);
            $this->db->update('tabel_transaksi_detail', array('transaksi_id' => $lastTransaksi['transaksi_id']));
        }
    }

    function checkout() {
        if (isset($_POST['submit'])) {
            $this->proses_chekout();
            $this->template->load('template', 'berhasil');
        } else {
            if ($this->session->userdata('nama') != '') {
                $data['member'] = $this->db->get_where('tabel_member', array('nama_lengkap' => $this->session->userdata('nama')))->row_array();
                $this->template->load('template', 'checkout_member', $data);
            } else {
                $this->template->load('template', 'checkout_guest');
            }
        }
    }

    function login() {
        $this->template->load('template', 'login');
    }

    function signup_proses() {
        $data = array(
                 'nama_lengkap' => $this->input->post('nama_lengkap'),
                 'email' => $this->input->post('email'),
                 'no_hp' => $this->input->post('no_hp'),
                 'password' => sha1($this->input->post('password')),
                 'alamat' => $this->input->post('alamat'));
             $this->db->insert('tabel_member', $data);
             redirect('cart/login');

        // if(password == password2){
        //      $data = array(
        //         'nama_lengkap' => $this->input->post('nama_lengkap'),
        //         'email' => $this->input->post('email'),
        //         'no_hp' => $this->input->post('no_hp'),
        //         'password' => sha1($this->input->post('password')),
        //         'alamat' => $this->input->post('alamat'));
        //     $this->db->insert('tabel_member', $data);
        //     redirect('cart/login');
           
        // }else {
        //     $data["msg"] = "Barang Berhasil di Tambahkan";
        //      redirect('cart/login');
        // }
    }

    function login_proses() {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $chek = $this->db->get_where('tabel_member', array('nama_lengkap' => $nama, 'email' => $email));
        if ($chek->num_rows() > 0) {
            $this->session->set_userdata(array('nama' => $nama, 'status_login' => 'sudah_login'));
        }
        redirect('home');
    }



}
<?php
class Auth extends CI_Controller{
    
    
    function __construct() {
        parent::__construct();
    }
    
    
    function index(){
        if(isset($_POST['submit']))
        {
            // proses login
            $username=  $this->input->post('username');
            $password=  $this->input->post('password');
            $chek=  $this->db->get_where('tabel_users',array('username'=>$username,'password'=>md5($password)));
            if($chek->num_rows()>0)
            {
                redirect('admin/product');
            }else{
                $this->load->view('admin/login');
            }
        }else{
            $this->load->view('admin/login');
        }
    }
    
    
    function logout(){
        //$this->session->destroy();
        redirect('admin/auth');
    }
}
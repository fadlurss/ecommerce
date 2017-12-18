<?php
class Demo extends ci_controller{
    
    
    function index(){
        //$this->load->view('templateadmin');
        $this->template->load('templateadmin','dashboard');
    }
}
<?php
class menu extends ci_controller{
    
    var $dir    ="menu";
    var $table  ="tabel_menu";
    
    function __construct() {
        parent::__construct();
    }
    
    function index(){
         $data['record']=  $this->db->get($this->table)->result();
         $this->template->load('template',  $this->dir.'/list',$data);
    }
}
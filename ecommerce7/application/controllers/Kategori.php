<?php
class Kategori extends CI_Controller{
    
    
    function show_by_kategori(){
        $seo=  $this->uri->segment(2);
        // get ID kategori
        $kategori=  $this->db->get_where('tabel_kategori',array('nama_kategori_seo'=>$seo))->row_array();
        $kategoriID=$kategori['kategori_id'];
        // get product List
        $data['product']= $this->db->get_where('tabel_product',array('kategori_id'=>$kategoriID));
        $this->template->load('template','showByKategori',$data);
    }
}
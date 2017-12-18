<?php
class mod_product extends ci_model{
    
    function select_all(){
        $query="SELECT tb1.product_id,tb1.nama_product,tb1.harga,tb2.nama_kategori
                FROM tabel_product as tb1,tabel_kategori tb2 
                WHERE tb1.kategori_id=tb2.kategori_id";
        return $this->db->query($query);
    }
    

    
    
    function simpan($gambar){
        $data=array(
                    'nama_product'     =>  $this->input->post('nama_product'),
                    'harga'            =>  $this->input->post('harga'),
                    'gambar'           =>   $gambar,
                    'kategori_id'      =>  $this->input->post('kategori'),
                    'nama_product_seo' =>  seo_title($this->input->post('nama_product')));
        $this->db->insert('tabel_product',$data);
    }
    
    
    function update($gambar){
        if($gambar==null){
                    $data=array(
                    'nama_product'     =>  $this->input->post('nama_product'),
                    'harga'            =>  $this->input->post('harga'),
                    'kategori_id'              =>  $this->input->post('kategori'),
                    'nama_product_seo' =>  seo_title($this->input->post('nama_product')));
        }else{
                   $data=array(
                    'nama_product'     =>  $this->input->post('nama_product'),
                    'harga'            =>  $this->input->post('harga'),
                    'gambar'           =>   $gambar,
                    'kategori_id'              =>  $this->input->post('kategori'),
                    'nama_product_seo' =>  seo_title($this->input->post('nama_product')));
        }
        $this->db->where('product_id',$this->input->post('id'));
        $this->db->update('tabel_product',$data);
    }
}
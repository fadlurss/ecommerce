<?php

class mod_transaksi extends ci_model {

    function select_all() {
        $sql = "SELECT tb1.*,tb2.nama_lengkap
                FROM tabel_transaksi as tb1, tabel_member as tb2 
                WHERE tb1.member_id=tb2.member_id";
        return $this->db->query($sql);
    }
    
    
    function update(){
        $this->db->where('transaksi_id',$this->input->post('id'));
        $this->db->update('tabel_transaksi',array('status'=>  $this->input->post('status'),'no_resi'=>  $this->input->post('resi')));
    }

}
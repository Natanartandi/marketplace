<?php
class Mproduk extends CI_Model {
    function tampil() {

     
        $q = $this->db->get("produk");

       
        $d = $q->result_array();

        return $d;
    }
    function simpan(){
        $config['upload_path'] = './assets/kategori/';
        $config['allowed_types'] = 'gift|jpg|png';

        $this->load->library('upload', $config);

        $ngupload =  $this->upload->do_upload("foto_produk");

       

        $this->db->insert('produk');

    }
}
<?php
class Mkategori extends CI_Model {
    function tampil() {

        //melakukan query
        $q = $this->db->get("kategori");

        //pecah ke array
        $d = $q->result_array();

        return $d;
    }
    function simpan($inputan){
        $config['upload_path'] = './assets/kategori/';
        $config['allowed_types'] = 'gift|jpg|png|jpeg';

        $this->load->library('upload', $config);

        $ngupload =  $this->upload->do_upload("foto_kategori");

        if($ngupload){
            $inputan['foto_kategori'] = $this->upload->data("file_name");
        }

        $this->db->insert('kategori', $inputan);

    }
    function hapus($id_kategori){
    
        $this->db->where('id_kategori', $id_kategori);
        $this->db->delete('kategori');
    }
    function detail($id_kategori){
        $this->db->where('id_kategori', $id_kategori);
        $q = $this->db->get('kategori');
        $d = $q->row_array();
        return $d;
    }

    function edit($inputan, $id_kategori)
    {
        $config['upload_path'] = './assets/kategori/';
        $config['allowed_types'] = 'gift|jpg|png|jpeg';
        $this->load->library('upload', $config);

       $ngupload =  $this->upload->do_upload("foto_kategori");

       if($ngupload){
        $inputan['foto_kategori'] = $this->upload->data("file_name");
       }

       $this->db->where('id_kategori', $id_kategori);
       $this->db->update('kategori', $inputan);   
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class berita_model extends CI_Model
{

    public function getAllBerita(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->order_by('tanggal_update', 'desc');
        return $this->db->get();
    }

    public function simpanBerita($table, $data){
        return $this->db->insert($table, $data);
    }
    
    public function seeMoreBerita($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id_news', $id);
        
        return $this->db->get();
    }

    public function latestPost(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->limit(3);
        $this->db->order_by('tanggal_update', 'desc');
        return $this->db->get();
    }

    public function popularPost(){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->limit(4);
        $this->db->order_by('jumlah_view', 'desc');
        return $this->db->get();
    }

    public function hapusBerita($table, $id){
        return $this->db->delete($table, array('id_news' => $id));
    }

    public function getEditBerita($id){
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where('id_news', $id);
        
        return $this->db->get();        
    }

    public function doEditBerita($table, $data, $id){
        $this->db->set($data);
        $this->db->where('id_news', $id);
        return $this->db->update($table);
    }
}

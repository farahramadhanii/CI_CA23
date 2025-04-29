<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class Matkul_model extends CI_Model{
    public function get_all_matkul(){
        return $this->db->get('matkul')->result_array();
    }
    public function insert_matkul($data){
        return $this->db->insert('matkul',$data);
    }
    public function delete_matkul($id_matkul){
        return $this->db->delete('matkul',['id_matkul'=>$id_matkul]);
    }
    public function get_matkul_by_id($id_matkul){
        return $this->db->get_where('matkul',['id_matkul'=>$id_matkul])->row_array();
    }
    public function update_matkul($id, $data){
        $this->db->where('id_matkul', $id);
        return $this->db->update('matkul',$data);
    }
}
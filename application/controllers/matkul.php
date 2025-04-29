<?php
defined('BASEPATH')OR exit('No direct script access allowed');

class matkul extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Matkul_model');
        $this->load->library('session');
    }
    Public function index(){
        $data['matkul']= $this->Matkul_model->get_all_matkul();
        $this->load->view('templates/header');
        $this->load->view('matkul/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah(){
        $data['matkul']=$this->Matkul_model->get_all_matkul();
        $this->load->view('templates/header');
        $this->load->view('matkul/form_matkul', $data);
        $this->load->view('templates/footer');
    }

    public function update($id) {
        $this->form_validation->set_rules('kode_matkul','kode_matkul','required');
        $this->form_validation->set_rules('nama_matkul','nama_matkul','required');
        $this->form_validation->set_rules('sks','sks','required');
        $this->form_validation->set_rules('semester','semester','required');
        $this->form_validation->set_rules('jenis','jenis','required');
        $this->form_validation->set_rules('prodi','prodi','required');

        if ($this->form_validation->run() === FALSE) {
            $this->index($id);
        }else {
            $data = [
                'kode_matkul' => $this->input->post('kode_matkul'),
                'nama_matkul' => $this->input->post('nama_matkul'),
                'sks' => $this->input->post('sks'),
                'semester' => $this->input->post('semester'),
                'jenis' => $this->input->post('jenis'),
                'prodi' => $this->input->post('prodi')
            ];
            $this->Matkul_model->update_matkul($id, $data);
            redirect('matkul');
        }
    }
    
    public function insert(){
        $kode_matkul = $this->input->post('kode_matkul');
        $nama_matkul = $this->input->post('nama_matkul');
        $sks = $this->input->post('sks');
        $semester = $this->input->post('semester');
        $jenis = $this->input->post('jenis');
        $prodi = $this->input->post('prodi');

        $data=array(
            'kode_matkul'=> $kode_matkul,
            'nama_matkul' => $nama_matkul,
            'sks' => $sks,
            'semester' => $semester,
            'jenis' => $jenis,
            'prodi' => $prodi
        );
        $result = $this->Matkul_model->insert_matkul($data);

        if($result){
            $this->session->set_flashdata('success','Matakuliah berhasil disimpan');
            redirect('matkul');
        }else{
            $this->session->set_flashdata('error','Gagal menyimpan Matakuliah');
            redirect('matkul');
        }
    }
    public function hapus($id_matkul){
        $this->Matkul_model->delete_matkul($id_matkul);
        redirect('matkul');
    }
    public function edit($id_matkul){
        $data['matkul']=$this->Matkul_model->get_matkul_by_id($id_matkul);
        $this->load->view('templates/header');
        $this->load->view('matkul/edit_matkul',$data);
        $this->load->view('templates/footer');
    }
}
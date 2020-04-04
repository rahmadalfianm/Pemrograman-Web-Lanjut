<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{
    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->API = "http://localhost/matakuliah/api";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }
    

    public function index()
    {
        $data['title'] = 'Data Matakuliah';
        $result =  $this->curl->simple_get($this->API . '/matkul');
        $data['matkul'] = json_decode($result, true);
            $this->load->view('template/header', $data);
            $this->load->view('matkul/index', $data);
            $this->load->view('template/footer');
    }

    public function edit($id_matkul)
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'id_matkul'      =>  $this->input->post('id_matkul'),
                    'nama_matkul'      =>  $this->input->post('nama_matkul'),
                    'tahun_ajaran'      =>  $this->input->post('tahun_ajaran'),
                    'hari'      =>  $this->input->post('hari')
                    
                );
                $update =  $this->curl->simple_put($this->API . '/matkul', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($update) {
                    $this->session->set_flashdata('hasil', 'Update Data Matakuliah Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Update Data Matakuliah Gagal');
                }
                redirect('matkul');
            } else {
                $data['matkul'] = json_decode($this->curl->simple_get($this->API . '/matkul?id_matkul=' . $id_matkul));
                $data['title'] = "Form Edit Data Matakuliah";
                $data['tahun_ajaran'] = ['2020','2021'];
                $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat'];
                $this->load->view('template/header', $data);
                $this->load->view('matkul/edit', $data);
            }
        }   
    }
    public function tambah()
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'nama_matkul'      =>  $this->input->post('nama_matkul'),
                    'tahun_ajaran'      =>  $this->input->post('tahun_ajaran'),
                    'hari'              =>  $this->input->post('hari')
                    
                );
                $insert = $this->curl->simple_post($this->API . '/matkul', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($insert) {
                    $this->session->set_flashdata('hasil', 'Tambah Data Matakuliah Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Tambah Data Matakuliah Gagal');
                }
                redirect('matkul');
            } else {
                $data['title'] = "Form Tambah Data Matakuliah";
                $data['tahun_ajaran'] = ['2020','2021'];
                $data['hari'] = ['Senin','Selasa','Rabu','Kamis','Jumat'];
                $this->load->view('template/header', $data);
                $this->load->view('matkul/tambah', $data);
            }
        }   
    }
    public function delete($id_matkul)
    {
        if ($this->session->userdata('level') == "user") {
          if (empty($id_matkul)) {
                redirect('matkul');
            } else {
                $delete = $this->curl->simple_delete($this->API . '/matkul?id_matkul=', array('id_matkul' => $id_matkul), array(CURLOPT_BUFFERSIZE => 10));
                if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Matakuliah Gagal');
            } else {
            $this->session->set_flashdata('hasil', 'Delete Data Matakuliah Berhasil');
            }
            redirect('matkul');
    }
}
    }
}

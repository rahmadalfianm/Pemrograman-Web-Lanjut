<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mengampu extends CI_Controller
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
        $data['title'] = 'Data Pengampu';
        $result =  $this->curl->simple_get($this->API . '/mengampu');
        $data['mengampu'] = json_decode($result, true);
            $this->load->view('template/header', $data);
            $this->load->view('mengampu/index', $data);
            $this->load->view('template/footer');
    }
    public function edit($id_matkul)
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'id_mengampu'      =>  $this->input->post('id_mengampu'),
                    'nama_dosen'       =>  $this->input->post('nama_dosen'),
                    'id'               =>  $this->input->post('id'),
                    'id_matkul'        =>  $this->input->post('id_matkul'),
                    'id_kelas'         =>  $this->input->post('id_kelas')
                    
                );
                $update =  $this->curl->simple_put($this->API . '/mengampu', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($update) {
                    $this->session->set_flashdata('hasil', 'Update Data Pengampu Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Update Data Pengampu Gagal');
                }
                redirect('mengampu');
            } else {
                $data['mengampu'] = json_decode($this->curl->simple_get($this->API . '/matkul?id_matkul=' . $id_matkul));
                $data['title'] = "Form Edit Data Pengampu";
                $data['id_kelas'] = ['1','2'];
                $data['id_matkul'] = ['1 Pemrograman Web lanjut','2 Sistem Operasi','3 Sistem Manajemen Basis Data','4 Manajemen Proyek','5 Proyek 1 Ganjil','6 Basis Data Lanjut'];
                $this->load->view('template/header', $data);
                $this->load->view('mengampu/edit', $data);
            }
        }   
    }
    public function tambah()
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'nama_dosen'       =>  $this->input->post('nama_dosen'),
                    'id'               =>  $this->input->post('id'),
                    'id_matkul'        =>  $this->input->post('id_matkul'),
                    'id_kelas'         =>  $this->input->post('id_kelas')
                );
                $insert = $this->curl->simple_post($this->API . '/mengampu', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($insert) {
                    $this->session->set_flashdata('hasil', 'Tambah Data Pengampu Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Tambah Data Pengampu Gagal');
                }
                redirect('mengampu');
            } else {
                $data['title'] = "Form Tambah Data Pengampu";
                $data['id_kelas'] = ['1','2'];
                $data['id_matkul'] = ['1 Pemrograman Web lanjut','2 Sistem Operasi','3 Sistem Manajemen Basis Data','4 Manajemen Proyek','5 Proyek 1 Ganjil','6 Basis Data Lanjut'];
                $this->load->view('template/header', $data);
                $this->load->view('mengampu/tambah', $data);
            }
        }   
    }
    public function delete($id_mengampu)
    {
        if ($this->session->userdata('level') == "user") {
          if (empty($id_mengampu)) {
                redirect('mengampu');
            } else {
                $delete = $this->curl->simple_delete($this->API . '/mengampu?id_mengampu=', array('id_mengampu' => $id_mengampu), array(CURLOPT_BUFFERSIZE => 10));
                if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Pengampu Gagal');
            } else {
            $this->session->set_flashdata('hasil', 'Delete Data Pengampu Berhasil');
            }
            redirect('mengampu');
    }
}
    }
}
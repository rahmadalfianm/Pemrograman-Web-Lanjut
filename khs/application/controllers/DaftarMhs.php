<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DaftarMhs extends CI_Controller
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
        $data['title'] = 'Data Mahasiswa';
        $result =  $this->curl->simple_get($this->API . '/mahasiswa');
        $data['mahasiswa'] = json_decode($result, true);
            $this->load->view('template/header', $data);
            $this->load->view('DaftarMhs/index', $data);
            $this->load->view('template/footer');
    }
    public function edit($id)
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'id'             =>  $this->input->post('id'),
                    'nama'           =>  $this->input->post('nama'),
                    'nim'            =>  $this->input->post('nim'),
                    'email'          =>  $this->input->post('email'),
                    'jurusan'        =>  $this->input->post('jurusan')
                    
                );
                $update =  $this->curl->simple_put($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($update) {
                    $this->session->set_flashdata('hasil', 'Update Data Mahasiswa Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Update Data Mahasiswa Gagal');
                }
                redirect('DaftarMhs');
            } else {
                $data['mahasiswa'] = json_decode($this->curl->simple_get($this->API . '/mahasiswa?id=' . $id));
                $data['title'] = "Form Edit Data Mahasiswa";
                $data['jurusan'] = ['Teknik Informatika'];
                $this->load->view('template/header', $data);
                $this->load->view('DaftarMhs/edit', $data);
            }
        }   
    }
    public function tambah()
    {
        if ($this->session->userdata('level') == "user") {
            if (isset($_POST['submit'])) {
                $data = array(
                    'id'             =>  $this->input->post('id'),
                    'nama'           =>  $this->input->post('nama'),
                    'nim'            =>  $this->input->post('nim'),
                    'email'          =>  $this->input->post('email'),
                    'jurusan'        =>  $this->input->post('jurusan')
                    
                );
                $insert = $this->curl->simple_post($this->API . '/mahasiswa', $data, array(CURLOPT_BUFFERSIZE => 10));
                if ($insert) {
                    $this->session->set_flashdata('hasil', 'Tambah Data Mahasiswa Berhasil');
                } else {
                    $this->session->set_flashdata('hasil', 'Tambah Data Mahasiswa Gagal');
                }
                redirect('DaftarMhs');
            } else {
                $data['title'] = "Form Tambah Data Mahasiswa";
                $data['jurusan'] = ['Teknik Informatika'];
                $this->load->view('template/header', $data);
                $this->load->view('DaftarMhs/tambah', $data);
            }
        }   
    }
    public function delete($id)
    {
        if ($this->session->userdata('level') == "user") {
          if (empty($id)) {
                redirect('DaftarMhs');
            } else {
                $delete = $this->curl->simple_delete($this->API . '/mahasiswa?id=', array('id' => $id), array(CURLOPT_BUFFERSIZE => 10));
                if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data Mahasiswa Gagal');
            } else {
            $this->session->set_flashdata('hasil', 'Delete Data Mahasiswa Berhasil');
            }
            redirect('DaftarMhs');
    }
}
    }
}

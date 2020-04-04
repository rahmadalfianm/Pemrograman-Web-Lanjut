<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
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
        $data['title'] = 'Data Mengampu';
        $result =  $this->curl->simple_get($this->API . '/mengampu');
        $data['mengampu'] = json_decode($result, true);
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('template/footer');
    }
}

<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PenggunaController extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Role Pengguna : Issue Shop';

        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('admin/pengguna', $data);
        $this->load->view('layouts/footer', $data);
    }
}

/* End of file PenggunaController.php */

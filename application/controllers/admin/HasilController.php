<?php

defined('BASEPATH') or exit('No direct script access allowed');

class HasilController extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Hasil : Issue Shop';

        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('admin/table_hasil', $data);
        $this->load->view('layouts/footer', $data);
    }
}

/* End of file HasilController.php */

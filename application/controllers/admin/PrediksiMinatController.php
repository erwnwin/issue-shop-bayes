<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PrediksiMinatController extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Prediksi Minat : Issue Shop';

        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('admin/prediksi_minat', $data);
        $this->load->view('layouts/footer', $data);
    }

    public function predictProductInterest()
    {
        // Ambil data input dari form 
        $nama_produk = $this->input->post('nama');
        $model_produk = $this->input->post('model');
        $harga_produk = $this->input->post('harga'); // Logika prediksi minat berdasarkan data yang tersedia 

        $prediksi_minat = $this->_predictInterest($nama_produk, $model_produk, $harga_produk); // Tampilkan hasil prediksi 

        $this->load->view(
            'produk/prediksi',
            ['hasil_prediksi' => $prediksi_minat]
        );
    }

    private function _predictInterest($nama, $model, $harga)
    {
        // Contoh sederhana: jika harga produk tinggi, prediksi minat rendah 
        if ($harga > 1000000) {
            return "Maaf, ya. Kayaknya produk ini memiliki prediksi minat yang rendah nih.";
        } else {
            return "Wah, produk ini kayaknya memiliki prediksi minat yang tinggi nih!";
        }
    }
}

/* End of file PrediksiMinatController.php */

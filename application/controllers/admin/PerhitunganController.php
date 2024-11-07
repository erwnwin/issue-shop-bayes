<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PerhitunganController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_penjualan');
    }


    public function index()
    {
        $data['title'] = 'Perhitungan : Issue Shop';

        $this->load->view('layouts/head', $data);
        $this->load->view('layouts/header', $data);
        $this->load->view('layouts/sidebar', $data);
        $this->load->view('admin/perhitungan', $data);
        $this->load->view('layouts/footer', $data);
    }


    public function predict_by_date()
    {
        $start_date = $this->input->post('start_date');
        $end_date = $this->input->post('end_date');

        // Ambil data transaksi berdasarkan rentang tanggal
        $items = $this->m_penjualan->get_items_by_date_range($start_date, $end_date);

        // Hitung jumlah item laris dan tidak laris berdasarkan kriteria yang ditentukan
        $prediksi = [];
        foreach ($items as $item) {
            // Contoh logika sederhana: jika quantity > 2 dalam rentang tanggal, anggap "Laris"
            $status = ($item['qty'] > 2) ? 'Laris' : 'Tidak Laris';

            // Simpan hasil prediksi ke dalam tabel baru
            $data = [
                'kode_produk' => $item['kode_produk'],
                'status_popularitas' => $status,
                'tanggal_prediksi' => date('Y-m-d')
            ];
            $this->m_penjualan->save_prediction($data);

            $prediksi[] = $data;
        }

        // Tampilkan hasil prediksi atau alihkan kembali ke halaman
        $data['prediksi'] = $prediksi;
        $this->load->view('naive_bayes_result', $data);
    }


    public function save_prediction($data)
    {
        $this->db->insert('prediksi_popularitas', $data);
    }
}

/* End of file PerhitunganController.php */

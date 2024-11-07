<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_penjualan extends CI_Model
{
    public function get_items_by_date_range($start_date, $end_date)
    {
        $this->db->where('tanggal >=', $start_date);
        $this->db->where('tanggal <=', $end_date);
        return $this->db->get('tbl_penjualan_detail')->result_array();
    }

    public function save_prediction($data)
    {
        $this->db->insert('tbl_prediksi_popularitas', $data);
    }
}

/* End of file M_penjualan.php */

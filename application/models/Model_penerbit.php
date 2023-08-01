<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_penerbit extends CI_Model
{
    public function hapus_penerbit($kode)
    {
        // Initialize the array to store the result and message
        $response = array();
        try {
            $this->db->where('kode_penerbit', $kode);
            $result = $this->db->delete('tb_penerbit');
            if ($result) {
                // Deletion successful
                echo "Penerbit deleted successfully.";
                $response['result'] = true;
                $response['message'] = "Penerbit deleted successfully.";
            } else {
                // Deletion failed, throw custom error
                throw new Exception("Error deleting penerbit: Foreign key constraint violation");
            }
        } catch (Exception $e) {
            // Handle the custom error message
            echo $e->getMessage();
            $response['result'] = false;
            $response['message'] = $e->getMessage();
        }
        return $response;
    }

    public function simpan_penerbit($data)
    {
        $this->db->insert('tb_penerbit', $data);
    }


    public function get_one_penerbit($kode)
    {
        $this->db->select('*');
        $this->db->from('tb_penerbit');
        $this->db->where('kode_penerbit', $kode);
        $query = $this->db->get();

        return $query;
    }

    public function edit_penerbit($kode, $dataMasuk)
    {
        $data = array(
            'nama_penerbit' => $dataMasuk['nama_penerbit'],
            'alamat_penerbit' => $dataMasuk['alamat_penerbit']
        );
        $this->db->where('kode_penerbit', $kode);
        $this->db->update('tb_penerbit', $data);
    }
}

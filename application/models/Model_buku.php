<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model_buku extends CI_Model
{

    public function get_all_buku()
    {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->join('tb_penerbit', 'tb_penerbit.kode_penerbit = tb_buku.kode_penerbit');
        $query = $this->db->get();
        return $query;
    }


    public function get_one_buku($kode)
    {
        $this->db->select('*');
        $this->db->from('tb_buku');
        $this->db->join('tb_penerbit', 'tb_penerbit.kode_penerbit = tb_buku.kode_penerbit');
        $this->db->where('kode_buku', $kode);
        $query = $this->db->get();

        return $query;
    }


    public function hapus_buku($kode)
    {
        $this->db->where('kode_buku', $kode);
        $this->db->delete('tb_buku');
    }

    public function simpan_buku($data)
    {
        $this->db->insert('tb_buku', $data);
    }

    public function edit_buku($kode, $dataMasuk)
    {
        $data = array(
            'judul_buku' => $dataMasuk['judul_buku'],
            'tahun_terbit' => $dataMasuk['tahun_terbit'],
            'kode_penerbit' => $dataMasuk['kode_penerbit']
        );
        $this->db->where('kode_buku', $kode);
        $this->db->update('tb_buku', $data);
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class JurnalPenjualanModel extends Model
{
    protected $table      = 'tb_jurnal_penjualan';
    protected $primaryKey = 'id_jurnal_penjualan';
    protected $allowedFields = ['tanggal_penjualan', 'nama_customer', 'nama_barang', 'jumlah_barang', 'harga_satuan', 'total_penjualan'];

    public function getDetailJurnalPenjualan($id_jurnal_penjualan = false)
    {
        if ($id_jurnal_penjualan == false) {
            return $this->findAll();
        }
        return $this->where(['id_jurnal_penjualan' => $id_jurnal_penjualan])->first();
    }
    public function printDetailJurnalPenjualan($tgalawal, $tglakhir)
    {

        return $this->table('tb_jurnal_penjualan')->where('tanggal_penjualan >=', $tgalawal)->where('tanggal_penjualan <=', $tglakhir)->get();
    }
}

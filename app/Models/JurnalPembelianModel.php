<?php

namespace App\Models;

use CodeIgniter\Model;

class JurnalPembelianModel extends Model
{
    protected $table      = 'tb_jurnal_pembelian';
    protected $primaryKey = 'id_jurnal_pembelian';
    protected $allowedFields = ['tanggal_pembelian', 'nama_sales', 'nama_barang', 'jumlah_barang', 'harga_satuan', 'total_pembelian'];

    public function getDetailJurnalPembelian($id_jurnal_pembelian = false)
    {
        if ($id_jurnal_pembelian == false) {
            return $this->findAll();
        }
        return $this->where(['id_jurnal_pembelian' => $id_jurnal_pembelian])->first();
    }

    public function printDetailJurnalPembelian($tgalawal, $tglakhir)
    {

        return $this->table('tb_jurnal_pembelian')->where('tanggal_pembelian >=', $tgalawal)->where('tanggal_pembelian <=', $tglakhir)->get();
    }
}

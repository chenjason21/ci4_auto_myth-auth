<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table      = 'tb_barang';
    protected $primaryKey = 'id_barang';
    protected $allowedFields = ['jenis_mobil', 'merek_mobil', 'no_part', 'jenis_barang', 'nama_barang', 'harga_sales', 'harga_jual', 'nama_sales', 'jumlah_barang'];

    public function getDetailBarang($id_barang = false)
    {
        if ($id_barang == false) {
            return $this->findAll();
        }
        return $this->where(['id_barang' => $id_barang])->first();
    }
}

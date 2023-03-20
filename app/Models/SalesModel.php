<?php

namespace App\Models;

use CodeIgniter\Model;

class SalesModel extends Model
{
    protected $table      = 'tb_sales';
    protected $primaryKey = 'id_sales';
    protected $allowedFields = ['nama_sales', 'no_hp', 'alamat_sales'];

    public function getDetailSales($id_sales = false)
    {
        if ($id_sales == false) {
            return $this->findAll();
        }
        return $this->where(['id_sales' => $id_sales])->first();
    }
}

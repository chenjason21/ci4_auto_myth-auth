<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table      = 'tb_customer';
    protected $primaryKey = 'id_customer';
    protected $allowedFields = ['nama_customer', 'no_hp', 'alamat_customer'];

    public function getCustomerDetail($id_customer = false)
    {
        if ($id_customer == false) {
            return $this->findAll();
        }
        return $this->where(['id_customer' => $id_customer])->first();
    }
}

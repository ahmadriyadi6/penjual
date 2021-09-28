<?php

namespace App\Models;

use CodeIgniter\Model;

class Costumer_Model extends Model{
    protected $table = "costumers";
    protected $primaryKey = "id_costumer";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_costumer', 'kd_costumer', 'name', 'phone_number', 'address'];

    public function getCostumers()
    {
        return $this->db->table('costumers')
         ->get()->getResultArray();  
    }   
}
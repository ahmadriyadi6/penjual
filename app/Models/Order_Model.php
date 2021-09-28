<?php

namespace App\Models;

use CodeIgniter\Model;

class Order_Model extends Model{
    protected $table = "order";
    protected $primaryKey = "id_order";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_order', 'id_user', 'id_costumer', 'date'];

    public function getOrder()
    {
        return $this->db->table('order')
         ->join('costumers','costumers.id_costumer=order.id_costumer')
         ->join('users','users.id_user=order.id_user')
         ->get()->getResultArray();  
    }
   
}
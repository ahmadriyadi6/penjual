<?php

namespace App\Models;

use CodeIgniter\Model;

class Items_Model extends Model{
    protected $table = "items";
    protected $primaryKey = "id_items";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_items', 'name', 'price', 'stock'];

	
    public function get($id=null)
    {
        $this->db->from('items');
        if($id != null){
            $this->db->where('id_items', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
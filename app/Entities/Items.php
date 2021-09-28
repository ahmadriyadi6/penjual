<?php
namespace App\Entities;

use CodeIgniter\Entitiy;

class Items extends Entity
{
    public function setImage($file)
    {
        $fileName = $file->getRandomName();
        $writePath ='./foto';
        $file->move($writePath, $fileName);
        $this->attributes['image'] = $fileName;
        return $this;
    }
}
<?php

namespace App\Models;
use CodeIgniter\Model;

class Classes extends Model
{
    protected $data = [
        'Math'       => ['id'=>'MATH4092', 'description'=>'a math class for the intellectuals'],
        'Philosophy' => ['id'=>'PHIL4083', 'description'=>'a philosphy class to OH YEA YEA'],
        'Business'   => ['id'=>'BUSA4124', 'desctiption'=>'learn to shake hands']
    ];
    
    public function find($id = null)
    {
        return $this->data[$id];
    }
    
    public function findAll(int $limit = 0, int $offset = 0)
    {
        return $this->data;
    }
}
    
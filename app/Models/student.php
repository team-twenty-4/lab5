<?php

namespace App\Models;
use CodeIgniter\Model;


class Student extends Model {
    
	protected $data = [
		'A01005350' => ['name' => 'Jacob Smith', 'gpa' => 98],
		'A00994245' => ['name' => 'Harmanbir Dhillon', 'gpa' => 103],
		'A01027608' => ['name' => 'Jonthan Chiu', 'gpa' => 53]
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

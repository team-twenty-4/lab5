<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use App\Models\Classes;
use App\Models\Student;

class Student_controller extends Controller {
    use ResponseTrait;
    
    public function index()
    {
        $model = new Student();
        
        $student = $model->findAll();
        return $this->respond($student, 200, 'Users Found');
    }
    
    public function show($id)
    {
        $model = new Student();
        
        $student = $model->find($id);
        return $this->respond($student, 200, 'User Found');
    }
    
    public function new() {
        return $this->failUnauthorized('Not implemented');
    }
    public function edit($id) {
        $db = \Config\Database::connect();
        $query = $db->query("SElECT * FROM student WHERE id = '" . $id . "'\''");
        $results = $query->getResult();
        $first = NULL;
        $last = NULL;
        foreach($results as $row) 
        {
            $first = $row->first;    
            $last  = $row->last;
        }
    }
    public function create() {
        return $this->failUnauthorized('Not implemented');
    }
    public function update($id) {
        return $this->failUnauthorized('Not implemented');
    }
    public function delete($id) {
        return $this->failUnauthorized('Not implemented');
    }
}

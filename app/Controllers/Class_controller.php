<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use App\Models\Classes;

class Class_controller extends Controller {
    use ResponseTrait;
    
    public function index()
    {
        $model = new Classes();
        
        $classes = $model->findAll();
        return $this->respond($classes, 200, 'Users Found');
    }
    
    public function show($id)
    {
        $model = new Classes();
        
        $classes = $model->find($id);
        return $this->respond($classes, 200, 'User Found');
    }
    
    public function new() {
        return $this->failUnauthorized('Not implemented');
    }
    public function edit($id) {
        $db = \Config\Database::connect();
        $query = $db->query("SElECT * FROM class WHERE id = '" . $id . "'\''");
        $results = $query->getResult();
        $code = NULL;
        $name = NULL;
        foreach($results as $row) 
        {
            $code = $row->first;    
            $name  = $row->last;
        }
    }
    public function create() {
        return $this->failUnauthorized('Not implemented');
    }
    public function update($id) {
        $modal = new Classes();
        
        $data = [
            'code' => $this->request->getPost('code');
            'name'  => $this->request->getPost('name');
        ];
        
        $modal->update($id, $data);
        $response = $modal->find($id);
        
        return $this->respond(response);
    }
    public function delete($id) {
        return $this->failUnauthorized('Not implemented');
    }
}

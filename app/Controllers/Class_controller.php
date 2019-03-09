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
        
        $class = $model->findAll();
        return $this->respond($class, 200, 'Users Found');
    }
    
    public function show($id)
    {
        $model = new Classes();
        
        $class = $model->find($id);
        return $this->respond($class, 200, 'User Found');
    }
    
    public function new() {
        return $this->failUnauthorized('Not implemented');
    }
    public function edit($id) {
        return $this->failUnauthorized('Not implemented');
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

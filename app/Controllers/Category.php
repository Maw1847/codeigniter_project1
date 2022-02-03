<?php 
namespace App\Controllers;
use App\Models\CategoryModel;
//use CodeIgniter\Controller;

class Category extends BaseController
{
    // show users list
    public function index(){
        $catModel = new CategoryModel();
        $data['categories'] = $catModel->orderBy('id', 'ASC')->findAll();
        return view('cat/overview', $data);
    }

    // add user form
    public function create(){
        return view('cat/add_cat');
    }
 
    // insert data
    public function store() {
        $catModel = new CategoryModel();
        $data = [
            'libelle' => $this->request->getVar('libelle'),
        ];
        $catModel->insert($data);
        return $this->response->redirect(site_url('/cat/add_cat'), 'refresh');
    }
}


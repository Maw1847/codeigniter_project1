<?php 
namespace App\Controllers;
use App\Models\TransactionModel;
//use CodeIgniter\Controller;

class Transaction extends BaseController
{
    // show users list
    public function index(){
        $transactModel = new TransactionModel();
        $data['depense'] = $transactModel->orderBy('id', 'ASC')->findAll();
        return view('trsct/list', $data);
    }

    // add user form
    public function create(){
        return view('trsct/add');
    }
 
    // insert data
    public function store() {
        $transactModel = new TransactionModel();
        $data = [
            'category' => $this->request->getVar('category'),
            'montant' => $this->request->getVar('montant'),
            'dateTr' => $this->request->getVar('dateTr'),
        ];
        $transactModel->insert($data);
        //return $this->response->redirect(site_url('/cat/add_cat'), 'refresh');
    }
}


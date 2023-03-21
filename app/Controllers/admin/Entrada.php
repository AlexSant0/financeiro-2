<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Entrada extends BaseController
{
    public function __construct(){
        $this->payment = model('PaymentModel');
    }

    public function index(){
        $data = array(
            'menu' => view('admin/layout/menu')
        );
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/entradas', $data);
        echo view('admin/layout/template-footer');
    }

    public function add(){
        $data = $this->request->getPost();

        echo json_encode(array(
            "status" => "success",
            'message' => 'muito bemm'
        ));
    }

    
}

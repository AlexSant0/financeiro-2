<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Payment extends BaseController
{
    private $payment;

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

        $result = $this->payment->create($data);

        if($result){

            echo json_encode(array(
                "status" => "success"
            ));
        }else{
            echo json_encode(array(
                "status" => "error"
            ));
        }
    }

    public function sub(){
        
        $data = $this->request->getPost();

        $result = $this->payment->create($data);

        if($result){

            echo json_encode(array(
                "status" => "success"
            ));
        }else{
            echo json_encode(array(
                "status" => "error"
            ));
        }
    }
    
}

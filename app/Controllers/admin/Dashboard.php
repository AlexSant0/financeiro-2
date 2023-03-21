<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private $payment;
    public function __construct(){
        $this->payment = model('PaymentModel');
    }
    public function index()
    {
        $data = $this->payment->getAll();
        
        foreach($data as $key => $val){
            $entrada[] = [
                'value' => $val->value,
                'method' => methodStatus($val->method),
                'description' => $val->description,
                'created_at' => date('d-m-Y', strtotime($val->created_at))
            ];
        }
    
        $data = array(
            'entradas' => $entrada,
            'menu' => view('admin/layout/menu')
        );
        
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/index', $data);
        echo view('admin/layout/template-footer');
    }

    public function entrada(){
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/entradas');
    }

    
}

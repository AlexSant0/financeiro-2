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
                'method' => $val->method,
                'description' => $val->description,
                'created_at' => $val->created_at
            ];
        }
    
        $data = array(
            'entradas' => $entrada
        );
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/index', $data);
    }
}

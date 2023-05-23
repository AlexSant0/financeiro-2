<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Agenda extends BaseController
{
    private $payment;
    private $spent;

    public function __construct(){
        
    }
    public function index()
    {
        $data = array(
            'menu' => view('admin/layout/menu')
        );

        echo view('admin/layout/template-header');
        echo view('admin/dashboard/agenda', $data);
        echo view('admin/layout/template-footer');
    }
    
    public function getPaymentSubSpent(){

        $payments = $this->payment->getAll();
        $spents = $this->spent->getAll();
        
        $data = [];
        foreach($spents as $key => $val){
            
            $data['total_spents'][] = $val->value;
        }
        foreach($payments as $key => $val){
            
            $data['total_payments'][] = $val->value;
        }
        return $data;
    }
    
}

<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    private $payment;
    private $spent;

    public function __construct(){
        $this->payment = model('PaymentModel');
        $this->spent = model('SpentModel');
    }
    public function index()
    {
        $data = $this->payment->getAll();

        foreach($data as $key => $val){
            $entrada[] = [
                'value' => $val->value,
                'method' => methodStatus($val->method),
                'service' => serviceStatus($val->service),
                'description' => $val->description,
                'created_at' => date('d-m-Y', strtotime($val->created_at))
            ];
        }
        $dados = $this->getPaymentSubSpent();
        $saidas = array_sum($dados['total_spents']);
        $entradas = array_sum($dados['total_payments']);
        $saldo = $entradas - $saidas;


        $data = array(
            'entradas' => $entrada ?? null,
            'soma' => $entradas,
            'sub' => $saidas,
            'saldo' => $saldo,
            'menu' => view('admin/layout/menu')
        );
        
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/index', $data);
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

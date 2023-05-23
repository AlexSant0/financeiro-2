<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Spent extends BaseController
{
    private $spent;

    public function __construct(){
        $this->spent = model('SpentModel');
    }

    public function index(){
        $data = array(
            'menu' => view('admin/layout/menu')
        );
        echo view('admin/layout/template-header');
        echo view('admin/dashboard/saidas', $data);
        echo view('admin/layout/template-footer');
    }

    public function add(){
        $data = $this->request->getPost();

        if($data['type'] == 1){

            $result = $this->spent->create($data);

            if($result){
                echo json_encode(array(
                    "status" => "success",
                    'message' => 'saida conta pessoal'
                ));
    
            }else{
                echo json_encode(array(
                    "status" => "error"
                ));
            }

        }else{
            $result = $this->spent->create($data);
            if($result){
                echo json_encode(array(
                    "status" => "success",
                    'message' => 'saida conta empresa'
                ));
    
            }else{
                echo json_encode(array(
                    "status" => "error"
                ));
            }
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

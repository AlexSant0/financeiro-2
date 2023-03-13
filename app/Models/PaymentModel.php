<?php

namespace App\Models;

use CodeIgniter\Model;
use Config\Database;

class PaymentModel extends Model
{
    protected $table = 'ganhos';
    protected $primaryKey = 'id';

    protected $builder;


    private function connect($table = null)
    {
       
        $db = Database::connect();
        $this->builder = $db->table($table ?? $this->table);

    }

    public function create($data){

        $this->connect();

        $this->builder->set($data);
        $this->builder->insert();

        return $this->db->insertID();

    }

    public function getById($order_id){

        $this->connect();

        $this->builder->select('*');
        $this->builder->where('id', $order_id);

        return $this->builder->get()->getRow();

    }

    public function  getAll(){
        $this->connect();

        $this->builder->select('*');
        return $this->builder->get()->getResult();
    }

    

}
<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {   
        return redirect()->route('admin'); 
        // return view('admin/dashboard/login');
    }
}

<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard()
    {
        return view('admin/index');
    }

    public function home()
    {
        return view('admin/index');
    }
}
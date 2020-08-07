<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('adminlte.items.index');
    }

    public function datatables()
    {
        return view('adminlte.items.datatables');
    }
}

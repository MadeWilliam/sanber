<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'title' => 'required|unique:questions',
            'content' => 'required'
        ]);
        
        $query = DB::table('questions')->insert(
            ['title' => $request["title"], 'content' => $request["content"]]
        );

        
        return redirect('pertanyaan/create');
    }

    public function index()
    {
        $questions = DB::table('questions')->get();
        // dd($questions);
        return view('pertanyaan.index', compact('questions'));
    }
    
}

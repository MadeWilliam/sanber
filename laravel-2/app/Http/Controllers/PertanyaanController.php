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


        return redirect('pertanyaan')
            ->with('success', 'Pertanyaan berhasil disimpan');
    }

    public function index()
    {
        $questions = DB::table('questions')->get();
        // dd($questions);
        return view('pertanyaan.index', compact('questions'));
    }

    public function show($id)
    {
        $question = DB::table('questions')->where('id', $id)->first();
        // dd($question);
        return view('pertanyaan.show', compact('question'));
    }

    public function edit($id)
    {
        $question = DB::table('questions')->where('id', $id)->first();
        // dd($question);
        return view('pertanyaan.edit', compact('question'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|unique:questions',
            'content' => 'required'
        ]);

        $query = DB::table('questions')
            ->where('id', $id)
            ->update([
                'title' => $request['title'],
                'content' => $request['content']
            ]);
        // dd($question);
        return redirect('pertanyaan')
            ->with('success', 'Pertanyaan berhasil diupdate');
    }

    public function destroy($id)
    {
        $query = DB::table('questions')
            ->where('id', $id)
            ->delete();
        // dd($question);

        return redirect('pertanyaan')
            ->with('success', 'Pertanyaan berhasil dihapus');
    }
}

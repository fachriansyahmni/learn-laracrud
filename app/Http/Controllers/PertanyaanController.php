<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\Jawaban;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function index()
    {
        $data = Pertanyaan::latest()->paginate(5);
        return view('question', compact('data'));
    }

    public function create()
    {
        return view('create-question');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $data = new Pertanyaan([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penanya_id' => rand(10, 99)  //sementara untuk user masih random
        ]);
        $data->save();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Behasil Di Submit');
    }
    public function show($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        $jawaban = DB::table('pertanyaan')->join('jawaban', 'jawaban.pertanyaan_id', '=', 'pertanyaan.id')->where(['pertanyaan.id' => $id])->get();
        $totaljwbn = Jawaban::where('pertanyaan_id', $id)->count();
        return view('answer', compact(['pertanyaan', 'jawaban', 'totaljwbn']));
    }

    public function edit($id)
    {
        $pertanyaan = Pertanyaan::find($id);
        return view('edit-question', compact(['pertanyaan']));
    }

    public function update($id)
    {
        $pertanyaan = Pertanyaan::find($id);

        $pertanyaan->judul = request('judul');
        $pertanyaan->isi = request('isi');
        $pertanyaan->save();

        return redirect('/pertanyaan/' . $pertanyaan->id);
    }

    public function delete($id)
    {
        $pertanyaan = Pertanyaan::find($id)->delete();
        $q = DB::table('jawaban')->where('pertanyaan_id', '=', $id)->delete();
        return redirect('/pertanyaan');
    }
}

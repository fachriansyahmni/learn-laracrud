<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
        $jawaban = Jawaban::find($pertanyaan_id);
        return view('answer-comment', compact(['jawaban']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jawabankamu' => 'required',
        ]);
        $data = new Jawaban([
            'jawaban' => $request->jawabankamu,
            'user_id' => rand(10, 99),  //sementara untuk user masih random
            'pertanyaan_id' => $request->id_pertanyaan,
        ]);
        $data->save();
        return redirect('/pertanyaan/' . $request->id_pertanyaan)->with('success', 'Behasil Di Submit');
    }
}

<?php

namespace App\Http\Controllers;

use App\Pertanyaans;
use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pertanyaans = Pertanyaans::all();

        return view('pertanyaans.index', compact('pertanyaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pertanyaans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'judul' => 'required',
        //     'isi' => 'required',
        // ]);
        
        // Pertanyaans::create($request-all());

        // return redirect()->route('pertanyaan.index');

        $query = DB::table('pertanyaans') -> insert([
            'judul' => $request['judul'], 
            'isi' => $request['isi'],
            'tanggal_dibuat' => $ldate = date('Y-m-d H:i:s'),
            'tanggal_diperbaharui' => $ldate = date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function show($pertanyaans)
    {
        $pertanyaan = DB::table('pertanyaans')->where('id', $pertanyaans)->first();
        return view('pertanyaans.detail', compact('pertanyaan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function edit($pertanyaans)
    {
        $pertanyaan = DB::table('pertanyaans')->where('id', $pertanyaans)->first();

        return view('pertanyaans.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function update($pertanyaans, Request $request)
    {
        $query = DB::table('pertanyaans') 
        -> where('id', $pertanyaans) 
        -> update([
            'judul' => $request['judul'], 
            'isi' => $request['isi'],
            'tanggal_diperbaharui' => $ldate = date('Y-m-d H:i:s'),
        ]);

        return redirect()->route('pertanyaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function destroy($pertanyaans)
    {
        $query = DB::table('pertanyaans') 
        -> where('id', $pertanyaans) 
        -> delete();

        return redirect()->route('pertanyaan.index');
    }
}

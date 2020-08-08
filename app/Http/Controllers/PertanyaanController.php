<?php

namespace App\Http\Controllers;

use App\Pertanyaans;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaans $pertanyaans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaans $pertanyaans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaans $pertanyaans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaans  $pertanyaans
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaans $pertanyaans)
    {
        //
    }
}
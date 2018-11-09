<?php

namespace App\Http\Controllers;

use App\DispoHebdo;
use Illuminate\Http\Request;

class DispoHebdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        request()->validate([
            'id'=>['required'],
            'hebdo'=>['required']
            
        ]);
        $hebdo = new DispoHebdo();
        $hebdo->relationTable(request('id'),request('hebdo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DispoHebdo  $dispoHebdo
     * @return \Illuminate\Http\Response
     */
    public function show(DispoHebdo $dispoHebdo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DispoHebdo  $dispoHebdo
     * @return \Illuminate\Http\Response
     */
    public function edit(DispoHebdo $dispoHebdo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DispoHebdo  $dispoHebdo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DispoHebdo $dispoHebdo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DispoHebdo  $dispoHebdo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DispoHebdo $dispoHebdo)
    {
        //
    }
}

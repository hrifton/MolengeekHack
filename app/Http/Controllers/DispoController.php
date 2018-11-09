<?php

namespace App\Http\Controllers;
use App\Dispo;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DispoController extends Controller
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
            'dateDeb'=>['required'],
            'dateFin'=>['required']   
        ]);
        $relation = new Dispo();
        $relation->relationtable(request('id'),request('dateDeb'),request('dateFin'));

       /* $relation = new Dispo();
       $id=Dispo::create([ 
           'date_debut'=> request('dateDeb'),
       'date_fin'=> request('dateFin')]);
       $userId=request('id');
       $relation->relationtable($userId,$id);*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\nursery_catelog;
use Illuminate\Http\Request;
use Session;

class Nursery_CatelogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $catelog=DB::table('nursery_catelogs')->where('nursery_id',$id)->get();
        if($catelog){
            return View::make('providerModule.nursery.CatelogShow')
        ->with('catelog', $catelog);
        }
        else{
            return View::make('providerModule.nursery.CatelogShow')
        ->with('catelog', $catelog);
        }
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
     * @param  \App\nursery_catelog  $nursery_catelog
     * @return \Illuminate\Http\Response
     */
    public function show(nursery_catelog $nursery_catelog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nursery_catelog  $nursery_catelog
     * @return \Illuminate\Http\Response
     */
    public function edit(nursery_catelog $nursery_catelog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nursery_catelog  $nursery_catelog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nursery_catelog $nursery_catelog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nursery_catelog  $nursery_catelog
     * @return \Illuminate\Http\Response
     */
    public function destroy(nursery_catelog $nursery_catelog)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\nursery;
use Illuminate\Http\Request;
use Session,Validator,View,Redirect,DB;
class NurseryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id=Session::get('login_id');
        $nurseries = DB::table('nurseries')->where('user_id', $id)->get();
       // $nurseries = nursery::find($id);

        
        if ($nurseries) {
            //
            return View::make('ProviderModule.nursery.showAllNurseryofUser') ->with('nurseries', $nurseries);
        }
        else{

            return View::make('ProviderModule.nursery.createNursery');
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
        return View::make('ProviderModule.nursery.createNursery');

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
        $rules = array(
            'nursery_name'       => 'required',
            'description'       => 'required | string'
            
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nursery_mng/create')
                ->withErrors($validator);
        } else {
            // store
            $nursery = new nursery;
            $nursery->nursery_name = $request->input('nursery_name');
            $nursery->description  = $request->input('description');
            $nursery->address  = $request->input('address');
            $nursery->user_id    =   Session::get('login_id');
            $nursery->save();
            $nursery->refresh();
            Session::put('nursery_id',  $nursery->id); 
            //var_dump(Session::get('nursery_id'));
            // redirect
            Session::flash('message', 'Successfully created Nursery!');
            return Redirect::to('nursery_mng');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function show(nursery $nursery)
    {
        //
        return View::make('ProviderModule.nursery.showSingleNursery')
            ->with('nursery', $nursery);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function edit(nursery $nursery)
    {
        //
        
        return View::make('ProviderModule.nursery.editSingleNursery')
        ->with('nursery', $nursery);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nursery $nursery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nursery  $nursery
     * @return \Illuminate\Http\Response
     */
    public function destroy(nursery $nursery)
    {
        //
    }
}

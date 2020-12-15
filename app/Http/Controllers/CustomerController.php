<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\customer;
use App\resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View,Validator,Session,Redirect,DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // get all the customers

        $user = Auth::user();
        $id = Auth::id();
        $customer_info = DB::table('customers')->where('user_id',$id)->get();
        
        // load the view and pass the nerds
        return View::make('customer.index')
            ->with('customers', $customer_info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View::make('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
        $rules = array(
            'first_name'       => 'required',
            'last_name'       => 'required',
            'phone_number'      => 'required',
            'address' => 'required|string'
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('customer/create')
                ->withErrors($validator)
                ->withInput(Input::except('name','email','password'));
        } else {
            // store
            $customer = new customer;
            $customer->first_name = $request->input('first_name');
            $customer->last_name  = $request->input('last_name');
            $customer->user_id    =   Session::get('login_id');
            $customer->phone_number = $request->input('phone_number');
            $customer->address = $request->input('address');
            $customer->bloger_id=  Session::get('login_id');
            $customer->save();
            $customer->refresh();
            $customer_id_newly_created=$customer->id;
            
            
            // redirect
            Session::flash('message', 'Successfully created Customer!');
            return Redirect::to('customer');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        
        // show the view and pass the nerd to it
        return View::make('customer.show')
            ->with('customer', $customer);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //

        //var_dump(Session::get('login_id'));
       
        return View::make('customer.edit')
            ->with('customer', $customer);
        
    }

   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }
}

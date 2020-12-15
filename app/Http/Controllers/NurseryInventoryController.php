<?php

namespace App\Http\Controllers;

use App\NurseryInventoryModel;
use Illuminate\Http\Request;
use View,Session,Redirect,Validator,DB;

class NurseryInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $id=Session::get('nursery_id');
        var_dump($id);
      
        $inventories=DB::table('nursery_inventories')->where('nursery_id',$id)->get();
       // var_dump(count($inventories));
        // exit();
        if(count($inventories)>1){
           // var_dump("I am with  value");
           // exit();
            $data=['inventories'=>$inventories,
            'nursery_id'=>$id];
            return View::make('providerModule.nursery.Inventory.InventoryShowByNurseryId')
        ->with($data);
        }
        else{
            //var_dump("I am with no value");
           // exit();
            return View::make('providerModule.nursery.Inventory.InventoryCreate')
        ->with('nursery_id', $id);
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
        $id=Session::get('nursery_id');
        return View::make('providerModule.nursery.Inventory.InventoryCreate')->with('nursery_id', $id);
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
         //
        var_dump(request()->all());
        // exit();
        $rules = array(
            'inv_name'       => 'required',
            'inv_type'       => 'required '
            
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nursery_inventory/create')

            ->withErrors($validator);
        } else {
            //var_dump(request()->all());
           // exit();
            // store
            // var_dump($request->input('inv_name'));
            // exit();
            $nursery_inv = new NurseryInventoryModel;
             $nursery_inv->inv_name = $request->input('inv_name');
            $nursery_inv->inv_type  = $request->input('inv_type');
            $nursery_inv->nursery_id = $request->input('nursery_id');;
            
            $nursery_inv->save();
            $nursery_inv->refresh();
            
            Session::put('current_inv_id',$nursery_inv->id);
            
            // redirect
            Session::flash('message', 'Successfully created Inventory!');
            return Redirect::to('nursery_inventory');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NurseryInventoryModel  $nurseryInventoryModel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
        //var_dump($id);
        $nurseryInventoryModel = NurseryInventoryModel::find($id);
        //var_dump($nurseryInventoryModel);
        $plant_infos=DB::table('plant_infos')->where('inv_id', $nurseryInventoryModel->id)->get();
        //var_dump($plant_infos);
       // exit();
        if($plant_infos){
            $data=['plant_infos'=>$plant_infos,
            'inventory'=>$nurseryInventoryModel];
            return View::make('ProviderModule.nursery.Inventory.showSingleNurseryInventory')
        ->with($data);
        }
        else{
            return View::make('ProviderModule.nursery.Inventory.showSingleNurseryInventory')
            ->with('inventory',$nurseryInventoryModel);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NurseryInventoryModel  $nurseryInventoryModel
     * @return \Illuminate\Http\Response
     */
    public function edit(NurseryInventoryModel $nurseryInventoryModel)
    {
        //
        return View::make('ProviderModule.nursery.editSingleNursery')
        ->with('nursery', $nursery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NurseryInventoryModel  $nurseryInventoryModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NurseryInventoryModel $nurseryInventoryModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NurseryInventoryModel  $nurseryInventoryModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(NurseryInventoryModel $nurseryInventoryModel)
    {
        //
    }
}

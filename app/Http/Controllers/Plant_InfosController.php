<?php

namespace App\Http\Controllers;

use App\plant_info;
use App\resource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View,Session,Redirect,Validator,DB;

class Plant_InfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       // $id=Session::get('nursery_id');
        $inv_id=Session::get('current_inv_id');
        $plant_infos=DB::table('plant_infos')->where('inv_id',$inv_id)->get();
        if($plant_infos){
            $data=['PlantList'=>$plant_infos,
                   'inv_id'=>$inv_id];
            return View::make('providerModule.nursery.Inventory.PlantList.PlantsShowByInvId')
        ->with($data);
        }
        else{
            
            return View::make('providerModule.nursery.Inventory.PlantList.PlantsCreateByInvId')
        ->with($data);
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
        $id=Session::get('current_inv_id');
        return View::make('providerModule.nursery.Inventory.PlantList.PlantsCreateByInvId')->with('inv_id', $id);
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
            'plant_name'       => 'required',
            'plant_type'       => 'required ',
            'plant_info'       => 'required '
                        
        );
        $validator = Validator::make($request->all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('nursery_inventory/create')
                ->withErrors($validator);
        } else {

            $plant_info_by_inv = new plant_info;
            $plant_info_by_inv->inv_id = $request->input('inv_id');
            $plant_info_by_inv->plant_name = $request->input('plant_name');
            $plant_info_by_inv->plant_type  = $request->input('plant_type');
            $plant_info_by_inv->prefered_season  = $request->input('prefered_season');
            $plant_info_by_inv->plant_info  = $request->input('plant_info');
             $plant_info_by_inv->save();
            $plant_info_by_inv->refresh();
            $plant_id_newly_created= $plant_info_by_inv->id;
            // store the images
               $images=array();
              
            if($files=$request->file('images')){
                foreach($files as $file){
                    $name=$file->getClientOriginalName();
                    $url = Storage::url($name);
                    $file_name = basename($name, ".jpg");
                    var_dump($file_name);
                   // exit();
                    $nursery_inventory_images_folder_name='Nus_inv_img';
                    $path = $file->store(
                        'Nus_inv_img/'.$request->input('inv_id').'/'.$plant_id_newly_created
                    );

                    // $file_show = Storage::get($path);
                    //  var_dump($file_show);
                    // exit();
                    $singleResource= new resource;
                    $singleResource->img=$path;
                    $singleResource->caption="The Plant name:". $request->input('plant_name').
                                            " and the type is ".  $request->input('plant_type');
                    $singleResource->plant_image_id=$plant_id_newly_created;
                    $singleResource->save();
                    }
               // exit();
            }
            // redirect
            Session::flash('message', 'Successfully Added to the inventory!');
          return Redirect::to('plant_info/'.$plant_id_newly_created);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\plant_info  $plant_info
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $plant_info = plant_info::find($id);
        $inv_id=Session::get('current_inv_id');
        $nursery_id=Session::get('nursery_id');
        $provider_name=Session::get('name');
        $resource= DB::table('resources')->where('plant_image_id',$plant_info->id)->get();
        $num_of_images=$resource->count();
       // var_dump($nursery_id);
        //$path='public/Nus_inv_img/'. $inv_id.'/NoImage.bmp';
        //$NoPreviewimage=Storage::get($path);
         
        if($resource){
            //$file_show = Storage::get($resource->img);
            $data=['plant_infos'=>$plant_info,
            'resources'=>$resource,
            'provider_name'=>$provider_name,
            'num_of_images'=>$num_of_images,
            'nursery_name'=>DB::table('nurseries')->where('id', $nursery_id)->first()];
            return View::make('providerModule.nursery.Inventory.PlantList.PlantShowById')
            ->with($data);
        }
        else{
            $data=['plant_infos'=>$plant_info,
            
            'provider_name'=>$provider_name,
            'num_of_images'=>$num_of_images,
            
            'nursery_name'=>DB::table('nurseries')->where('id', $nursery_id)->first()];
            return View::make('providerModule.nursery.Inventory.PlantList.PlantShowById')
            ->with($data);
        }
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\plant_info  $plant_info
     * @return \Illuminate\Http\Response
     */
    public function edit(plant_info $plant_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\plant_info  $plant_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, plant_info $plant_info)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\plant_info  $plant_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(plant_info $plant_info)
    {
        //
    }
}

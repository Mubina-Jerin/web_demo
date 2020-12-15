<?php

namespace App\Http\Controllers;
use App\material;
use Illuminate\Http\Request;
use View,Session,Redirect,Validator,DB;

class ProviderServices extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('auth');
       
    }

    public function createInvByNusId($id){
        $value= Session::get('nursery_id');
        if($value!=NULL){
            Session::forget('nursery_id');
        }
        
        Session::put('nursery_id',$id);
        if(count(DB::table('nursery_inventories')->where('nursery_id',$id)->get())>0){
            return Redirect::to('nursery_inventory');
        }
        return Redirect::to('nursery_inventory/create');
      
    }
    public function createPlantByInvId($inv_id){

        $value= Session::get('current_inv_id');
        
        if($value!=NULL){
            Session::forget('current_inv_id');
        }
       Session::put('current_inv_id',$inv_id);
       return Redirect::to('plant_info/create');
       
      
    }
    public function AdCreationHomePage(){
        var_dump("jsjdsjd");
        //exit();
        $user_id=Session::get('login_id');
        $user_name=Session::get('name');
        var_dump($user_name);
        $nursery_obj=DB::table('nurseries')->where('user_id',$user_id)->get();
        var_dump(count($nursery_obj));
        //exit();
        if(count($nursery_obj)>0){
            var_dump("Loop 1");
            $data=['user_name'=>$user_id,
            'nursery_obj'=>$nursery_obj];

        return View::make('ProviderModule.nursery.AdMng.Homepage')->with($data);
          
        }
        else{
            var_dump("loop 2");
            $data=['user_name'=>$user_id,
            'nursery_obj',null];
            //$nursery_obj=null;
            return View::make('ProviderModule.nursery.AdMng.Homepage')->with($data);
          
        }
    }
    public function showNurseryDetails($id){
       // var_dump($id);
        $nursery_obj=DB::table('nurseries')->where('id',$id)->get();
        $inventory_obj=DB::table('nursery_inventories')->where('nursery_id',$id)->get();
        $i=0;
        $plant_info_obj=array();
        foreach($inventory_obj as $key=>$item){
           
            $plant_info_obj[$i]=DB::table('plant_infos')->where('inv_id',$item->id)->get();
           
           if(count($plant_info_obj[$i])==0){
            //var_dump("Is 0");
            $is_inventory_empty[$item->id]=true;
           }
           else{
            $is_inventory_empty[$item->id]=false;
           }
            //var_dump($plant_info_obj[$key]);
           $i++;
        }
        $i=0;
        //exit();
        // foreach($plant_info_obj[0] as $item){
        //     var_dump( $plant_info_obj[$i][$item->id][0]->id);
        //     exit();
        // }
       
        $data= [
            'nursery_obj'=>$nursery_obj, 
            'inv_obj'=>$inventory_obj, 
            'plant_infos'=> $plant_info_obj,
             'is_inventory_empty'=>$is_inventory_empty];
        

       // var_dump($nursery_obj);
       return View::make('ProviderModule.nursery.AdMng.showNurseryInfo')->with($data);

      // var_dump( $plant_info_obj);

        //exit();

    }
    public function postAd($plant_id){

       // var_dump($plant_id);
        $owner_id=Session::get('login_id');
        $inv_obj=DB::table('plant_infos')->where('id',$plant_id)->get('inv_id');
        $inv_id= $inv_obj[0]->inv_id;
         
       $data=['owner_id'=>$owner_id,'inv_id'=>$inv_id,'plant_id'=>$plant_id];
       
       return View::make('ProviderModule.nursery.AdMng.CreateAd')->with($data);
       
    }
    public function publishAd(Request $request){

       var_dump($request->all());
       $material=new material;
       $material->display_name= $request->input('display_name');
       $material->owner_id= $request->input('owner_id');
       $material->inv_id= $request->input('inv_id');
       $material->unit_price= $request->input('unit_price');
       $material->display_info= $request->input('display_info');
       $material->plant_id= $request->input('plant_id');
       $material->save();
       Session::flash('message', 'Successfully created Ad!');
       $nursery_id=Session::get('nursery_id');
      
       return Redirect::to('nurseryDetailsShow/'.$nursery_id);
    }
    public function showAd($plant_id){
        $mat_obj=DB::table('materials')->where('plant_id',$plant_id )->get();
        $plant_info_obj=DB::table('plant_infos')->where('id',$plant_id )->get();
        $resource= DB::table('resources')->where('plant_image_id',$plant_id)->get();
        $nursery_name=DB::table('nurseries')->where('id', Session::get('nursery_id'))->get('nursery_name');
        $num_of_images=$resource->count();
        if($num_of_images>0){
            //$file_show = Storage::get($resource->img);
            $data=[
             'mat_obj'=>$mat_obj,
            'plant_info'=>$plant_info_obj,
            'resources'=>$resource,
            'nursery_id'=>Session::get('nursery_id'),
            'num_of_images'=>$num_of_images,
            'nursery_name'=>$nursery_name];
            return View::make('ProviderModule.nursery.AdMng.ShowAd')->with($data);          
           
        }
        else{
            $data=['plant_info'=>$plant_info_obj,
            'mat_obj'=>$mat_obj,
            'num_of_images'=>0,
            'nursery_id'=>Session::get('nursery_id'),
            'resources'=>$resource,
            'nursery_name'=>$nursery_name];
            return View::make('ProviderModule.nursery.AdMng.ShowAd')->with($data);        
        }
       

    }
    public function showServices(){
        $user_id=Session::get('login_id');
        return View::make('ProviderModule.showListOfServices')->with('user_id',$user_id);

    }
    

}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\customer;
use App\provider;
use App\orders;
use Illuminate\Http\Request;
use Session;
use View,Redirect,Validator,DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
       // $this->middleware('auth');
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


     public function  index(){

       return view('pages.home',['user'=>""]);
     }
    public function showUserHome()
    {
        $user = Auth::user();
        $id = Auth::id();
        
        Session::put('login_id',  $id); 
        Session::put('name', $user['name']);
        Session::put('phone_number',  $user['phone_number']);
        Session::put('user_type',  $user['user_type']);
       
        

        if($user['user_type']=="customer"){
            $name=explode(" ",$user['name']);
               if(sizeof($name)==3){
                  $first_name=$name[0];
                  $middle_name=$name[1];
                  $last_name=$name[2];
              }
              else if(sizeof($name)==2){
                  $first_name=$name[0];
                  $last_name=$name[1];
              }
              else{
                  $first_name=$name[0];
                  $last_name="";
              }
             // var_dump($first_name[0]);
             /// exit();
              
              $new_customer= new customer;
              $new_customer->first_name= $first_name;
              $new_customer->last_name=  $last_name;
              $new_customer->user_id=   $id;
              $new_customer->phone_number= $user['phone_number'];
              $new_customer->address= "";
              $new_customer->bloger_id=$id;
              $new_customer->save();
              $new_customer->refresh();
              $customer_id= $new_customer->id;

              Session::put('customer_id',$customer_id);
              return view('customer.customerHome',['user'=>$new_customer]);
          }
          elseif($user['user_type']=="provider"){

              $name=explode(" ",$user['name']);
              if(sizeof($name)==3){
                  $first_name=$name[0];
                  $middle_name=$name[1];
                  $last_name=$name[2];
              }
              else if(sizeof($name)==2){
                  $first_name=$name[0];
                  $last_name=$name[1];
              }
              else{
                  $first_name=$name[0];
                  $last_name="";
              }
                            
              $new_provider= new provider;
              $new_provider->first_name       = $first_name;
              $new_provider->last_name      =  $last_name;
              $new_provider->user_id      =   $id;
              $new_provider->phone_number = $user['phone_number'];
              $new_provider->address = "";
              $new_provider->is_broker=false;
              $new_provider->is_sourcer=false;
              $new_provider->bloger_id= $id;
              $new_provider->save();
              $new_provider->refresh(); //e
              $prov_id= $new_provider->id;//e
              Session::put('provider_id',$prov_id);//e
               return view('providerModule.providerHome',['user'=>$new_provider]);
          }
       elseif($user['user_type']=="admin"){
           
        return view('admin.AdminLanding',['user'=>$user]);
    }
}
          
public function ShowListOfNurseries(){

    $nurseries_obj= DB::table('nurseries')->get();
    var_dump($nurseries_obj);
    exit();

}

public function ShowallPlantAd(){
    $mat_obj=DB::table('materials')->get();
    
     // foreach($mat_obj as $key=>$item){
     //        $inv_obj[$key]=DB::table('nursery_inventories')->where('id',$item->inv_id)->get();
     //        $nursery_obj[$key]= DB::table('nurseries')->where('id',$inv_obj->nursery_id)->get();
     
     // }
     // var_dump($nursery_obj);
     // exit(); 
     return View::make('customer.ShowAllPlantAd')->with('mat_obj',$mat_obj);          
       
    
    var_dump($mat_obj);
    exit();

}

public function ShowOrderSummery(){

$order_obj=DB::table('orders')->where('id',Session::get('current_order_id'))->get();
   
 return View::make('customer.ShowOrderSummery')->with('order_obj',$order_obj);          
       
    
}

public function orderComplete(Request $request){
    //'placed','processing','delivered'
    $mat_id= $request->input('mat_id');
    $mat_obj=DB::table('materials')->where('id',$mat_id)->get();
    $provider_obj=DB::table('providers')->where('id',$mat_obj[0]->owner_id)->get();
    $provider_phone_number=$provider_obj[0]->phone_number;
    $order_obj=new orders;
    $order_obj->sender_id=Session::get('login_id');
    $order_obj->recipent_id= $mat_obj[0]->owner_id;
    $order_obj->tracking_id=$mat_obj[0]->owner_id.
                Session::get('login_id').$mat_id;
    $order_obj->order_summary=$mat_obj[0]->display_name .
                             ' And The Amount is '. $request->input('quantity');
    $unit_price=$mat_obj[0]->unit_price;
    
    $total_amount=$unit_price*$request->input('quantity');
    $order_obj->total_amount= $total_amount;
    $order_obj->order_status="placed";
    $order_obj->provider_phone_number=$provider_phone_number;
    $order_obj->save();
    $order_obj->refresh();
    Session::put('current_order_id',$order_obj->id);
    Session::flash('message', 'Successfully Placed the Order!');
    return Redirect::to('/ShowallPlantAd');
    //var_dump($order_obj->total_amount);


}
public function orderItem($mat_id){

    $mat_obj=DB::table('materials')->where('id',$mat_id)->get();
    return View::make('customer.createOrderPage')->with('mat_obj',$mat_obj); 

}

public function EditCustomer(Request $request){
     
    if($request->input('user_id')){

        $customer_info = DB::table('customers')->where('user_id',$request->input('user_id'))->get();
        
        $customer_id= $customer_info->id;
       $afftected= DB::table('customers')
          ->where('id',  $customer_id)
          ->update(['first_name' => $request->input('first_name'),
          'last_name' => $request->input('last_name'),
          'user_id' =>  Session::get('login_id'),
          'address' => $request->input('address')]);
           // store the images
            //var_dump($afftected);
                        
        $images=array();
        if($files=$request->file('images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $url = Storage::url($name);
                $file_name = basename($name, ".jpg");
               // var_dump($file_name);
               //exit();
                $nursery_inventory_images_folder_name='Customer_img';
                $path = $file->store(
                    'Customer_img/'.Session::get('login_id')
                );

                // $file_show = Storage::get($path);
                //  var_dump($file_show);
                // exit();
                $singleResource= new resource;
                $singleResource->img=$path;
                $singleResource->caption="The First name:". $request->input('first_name').
                                        " and the Last name ".  $request->input('last_name');
                $singleResource->customer_image_id=$customer_id;
                $singleResource->save();
                }
    }
 
       // exit();

    }

    return Redirect::to('/userLanding');

}

public function EditProvider(Request $request){ //e

   
            
    if($request->input('user_id')){
        $provider=DB::table('providers')->where('user_id',$request->input('user_id'))->get();
        $afftected= DB::table('customers')
          ->where('id',  $provider[0]->id)
          ->update(['first_name' => $request->input('first_name'),
          'last_name' => $request->input('last_name'),
          'user_id' =>  Session::get('login_id'),
          'address' => $request->input('address')]);
          if(count($afftected)>0){
            Session::flash('message', 'Successfully updated the User!');
          }
          else{
            return Redirect::to('provider/'.provider[0]->id.'/edit');
          }
    }
    else{
        return Redirect::to('/userLanding');
    }

}


}

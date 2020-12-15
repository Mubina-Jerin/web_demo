<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use View,Validator,Session,Redirect,DB;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $id = Auth::id();
        $blog_info = DB::table('blogs')->where('user_id',$id)->get();
        return View::make('customer.blogindex')
            ->with('blog_info', $blog_info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return View::make('customer.createBlog');
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

        
            // store
           $blog_obj= new blog;
           $blog_obj->blog_title       = $request->input('blog_title');
           $blog_obj->blog_introduction       = $request->input('blog_introduction');
           $blog_obj->blog_conclusion      = $request->input('blog_conclusion');
           $blog_obj->blog_body = $request->input('blog_body');
           $blog_obj->user_id = Session::get('login_id');
           $blog_obj->save();
           $blog_obj->refresh();
           $blog_id=$blog_obj->id;

           $images=array();
    //        if($files=$request->file('images')){
    //            foreach($files as $file){
    //                $name=$file->getClientOriginalName();
    //                $url = Storage::url($name);
    //                $file_name = basename($name, ".jpg");
    //                //var_dump($file_name);
                 
                   
    //                $path = $file->store(
    //                    'Blog_img/'.Session::get('login_id'). '/'.$blog_id
    //                );
   
    //                // $file_show = Storage::get($path);
    //                //  var_dump($file_show);
    //                // exit();
    //                $singleResource= new resource;
    //                $singleResource->img=$path;
    //                $singleResource->caption="The First name:". $request->input('first_name').
    //                                        " and the Last name ".  $request->input('last_name');
    //                $singleResource->customer_image_id=$customer_id;
    //                $singleResource->save();
    //                }
            
        
    // }
     // redirect
     Session::flash('message', 'Successfully created Blog!');
     return Redirect::to('blog/'.$blog_id);

}

    /**
     * Display the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(blog $blog)
    {
        //
        return View::make('customer.blogshow')
            ->with('blog', $blog);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        //
        return View::make('customer.Blogedit')
        ->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(blog $blog)
    {
        //
    }
}

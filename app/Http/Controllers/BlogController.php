<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{
    private $status     =   200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();   
        return view('blogs.index',['blogs'=>$blogs]);             
    }

    public function showBlog($key)
    {        
        $blog = Blog::find($key);
        
        return view('blogs.detail',['blog'=>$blog]);             
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validator          =       Validator::make($request->all(),
            [
                "title"        =>      "required",
                "description"         =>      "required",
                "author"             =>      "required",
                "image"             =>      "required"
            ]
        );

        // if validation fails
        if($validator->fails()) {
            return response()->json(["status" => "failed", "validation_errors" => $validator->errors()]);
        }

        $blog_id             =       $request->id;
         $blogArray           =       array(
            "first_name"            =>      $request->first_name,
            "last_name"             =>      $request->last_name,
            "full_name"             =>      $request->first_name . " " . $request->last_name,
            "email"                 =>      $request->email,
            "phone"                 =>      $request->phone
        );

        if($blog_id !="") {           
            $blog              =         blog::find($blog_id);
            if(!is_null($blog)){
                $updated_status     =       blog::where("id", $blog_id)->update($blogArray);
                if($updated_status == 1) {
                    return response()->json(["status" => $this->status, "success" => true, "message" => "blog detail updated successfully"]);
                }
                else {
                    return response()->json(["status" => "failed", "message" => "Whoops! failed to update, try again."]);
                }               
            }                   
        }

        else {
            $blog        =       blog::create($blogArray);
            if(!is_null($blog)) {            
                return response()->json(["status" => $this->status, "success" => true, "message" => "blog record created successfully", "data" => $blog]);
            }    
            else {
                return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! failed to create."]);
            }
        }        
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $blog        =       blog::find($id);
        // if(!is_null($blog)) {
        //     return response()->json(["status" => $this->status, "success" => true, "data" => $blog]);
        // }
        // else {
        //     return response()->json(["status" => "failed", "success" => false, "message" => "Whoops! no blog found"]);
        // }
        // return view('welcome');
        return redirect("/blog/$id");
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
        $blog        =       blog::find($id);
        if(!is_null($blog)) {
            $delete_status      =       blog::where("id", $id)->delete();
            if($delete_status == 1) {
                return response()->json(["status" => $this->status, "success" => true, "message" => "blog record deleted successfully"]);
            }
            else{
                return response()->json(["status" => "failed", "message" => "failed to delete, please try again"]);
            }
        }
        else {
            return response()->json(["status" => "failed", "message" => "Whoops! no blog found with this id"]);
        }
    }
}

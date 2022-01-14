<?php

namespace App\Http\Controllers\topic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreCategory;
use App\Models\Topicdata;
use Illuminate\Support\Facades\DB;


class Topic extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=StoreCategory::all();
        return view('createTopic',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $request->validate([
            'category'=>'required',
            'topic'=>'required',
            'description'=>'required',
            'path'=>'required'
        ]);
        Topicdata::create($request->all());
        $data=StoreCategory::all();
        return view('createTopic',['data'=>$data]);
        
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

    public function homedata(){
      $category=DB::table('store_categories')
      ->join('topicdatas','store_categories.id','=','topicdatas.category')
        ->select('store_categories.category','topicdatas.topic','topicdatas.description','topicdatas.path','topicdatas.created_at') 
        ->orderByRaw('topicdatas.created_at DESC')
        ->get();
        return view('welcome',['category'=>$category]);
    }
    public function laravelcrud()
    {
        $introduction=DB::table('store_categories')
      ->leftjoin('topicdatas','store_categories.id','=','topicdatas.category')
        ->select('store_categories.category','topicdatas.topic','topicdatas.description','topicdatas.path','topicdatas.created_at') 
        ->where('store_categories.id','=','1')
        ->orderByRaw('topicdatas.created_at DESC')
        ->get();
        return view('/laravel/crud',['introduction'=>$introduction]);
    }
    
}
    
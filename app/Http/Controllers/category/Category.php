<?php

namespace App\Http\Controllers\category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoreCategory;
use Illuminate\Support\Facades\Validator;

class Category extends Controller
{
    //
    public function createCategory()
    {
        return view('category/createCategory');
    }
    public function storeCategory(Request $request)
    {
        $category=$request->validate([
            'category'=>'required|max:10',
        ]);
        if($category){
            $data=StoreCategory::create($category);
            return view('category/createCategory');
            
        }
        

    }
}

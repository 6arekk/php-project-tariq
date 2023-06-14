<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use app\Http\Requests\StoreCategoryRequest;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{

    public function GetIndex(){
       $categories=Category::all();
        return view('category.index',compact('categories'));
    }

    public function StoreCategory(StoreCategoryRequest $request){
        try {
           category::create([
            'name'=>$request->CatName,
           // 'description'=>$request->CatDesc,

           ]);
           Alert::success('success','Category Added','successfully');
           return redirect()->route('category.index');
            }

            catch (\Throwable $th) {
                Alert::error('Error',$th->getmessage());
           return redirect()->route('category.index');
              // do somthing

            }

    }
    public function updateCategory(Request $request)
    {

    }






    }


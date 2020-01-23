<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Category;
use App\Mail\DbActionDelete;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('pages.index' , compact('categories'));
    }

    public function categoryEdit($id){
        $category = Category::findOrFail($id);
        return view('pages.categoryEdit' , compact('category'));
    }

    public function categoryUpdate(CategoryRequest $request,$id){
        $validatedData = $request -> validated();
        $category = Category::findOrFail($id);
        $category -> update($validatedData);
        
        return redirect() -> route('home.index');
    }

    public function categoryDelete($id) {
        $category = Category::findOrFail($id);
        $category -> posts() -> delete();
        $category -> delete();

        Mail::to("mia@mail.com")
                ->send(new DbActionDelete(
                    "Category",
                    $category -> name
                ));

        return redirect() -> route('home.index');
    }
    
}

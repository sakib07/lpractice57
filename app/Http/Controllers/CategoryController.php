<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index(){
    	return view('admin.category.categoryEntry');
    }

    public function save (Request $request){

    	
    	$categoryEntry= new Category();

    	$categoryEntry->categoryName = $request->name;
    	$categoryEntry->shortDescription = $request->shortDescription;
    	$categoryEntry->categoryName = $request->name;
    	$categoryEntry->publicationStatus = $request->publicationStatus;

    	$categoryEntry->save();

    	return redirect('/category/save')->with('message','Data Insert Successfully');
    }

    public function manage(){
    	$categories = Category::all();
    	return view('admin.category.categoryManage',['category'=>$categories]);
    }
}

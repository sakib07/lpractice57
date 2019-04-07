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

    public function edit($id){
    	$CategoryEdit = Category::where('id',$id)->first();

    	return view('admin.category.CategoryEdit',['category'=>$CategoryEdit]);
    }

    public function update(Request $request){

    	$category= Category::find($request->categoryId);

    	$category->categoryName = $request->name;
    	$category->shortDescription = $request->shortDescription;
    	$category->categoryName = $request->name;
    	$category->publicationStatus = $request->publicationStatus;

    	$category->save();

    	return redirect('/category/manage')->with('message','Data updated Successfully');
    }
    public function delete($id){
    	$categoryDelete = Category::find($id);
    	$categoryDelete->delete();
          
          return redirect('/category/manage')->with('message','Data Deleted Successfully');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function index(){
	$categories = Category::where('publicationStatus',1)->get();;
    	return view('admin.product.productEntry',['categories'=>$categories]);

    }

     public function save(Request $request){

    	$product = new Product();

    	$product->productName = $request->name;
    	$product->categoryId = $request->categoryId;
    	$product->price = $request->price;
    	$product->qty = $request->qty;
    	$product->shortDescription = $request->shortDescription;
    	$product->pic = 'picture';
    	$product->publicationStatus = $request->publicationStatus;

    	$product->save();

    	$lastId = $product->id;
      
      $pictureInfo =$request->file('pic');

     $picName = $lastId.$pictureInfo->getClientOriginalName();

     $folder = "productImage/";

     $pictureInfo->move($folder,$picName);

     $picUrl = $folder.$picName;

     $productPic = Product::find($lastId);

     $productPic->pic = $picUrl;
     $productPic->save();
   	return redirect('/product/entry')->with('message','Product Insert Successfully');
    }

    public function manage(){

       $products =DB::table('products')
          ->join('categories','categories.id','=','categoryId')
          ->select('products.*','categories.categoryName as catName')
          ->OrderBy('products.id','desc')
          ->paginate(5);

    	return view('admin.product.productManage',['products'=>$products]);
    }

    public function singleProduct($id){
      $productById=DB::table('products')
           ->join('categories','categories.id','=','categoryId')
            ->select('products.*','categories.categoryName as catName')
           ->where('products.id',$id)
           ->first(); 

    return view('admin.product.singleProduct',['product'=>$productById]);
    }

    public function editProduct($id){
        $product =Product :: where('id',$id)->first();

        $category = Category ::where('publicationStatus',1)->get();
    return view('admin.product.productEdit',['product'=>$product,'categories'=>$category]);
    }
  // picture edit , update
    public function updateProduct(Request $request){
       

        $productPic = Product::where('id',$request->product_id)->first();

    

        if($picInfo = $request->file('pic')){

 if(file_exists($productPic->pic)){
    unlink($productPic->pic);
 }

   $picName =$request->product_id.$picInfo->getClientOriginalName();
   $path = "productImage/";
   $picUrl = $path.$picName;
   $picInfo->move($path,$picName);
}
  else{
 $picUrl =  $productPic->pic;
  }
 
$product = Product::find($request->product_id);

 $product->productname = $request->name;
 $product->categoryId = $request->categoryId;
 $product->price = $request->price;
 $product->qty = $request->qty;
 $product->shortDescription = $request->shortDescription;
 $product->publicationStatus = $request->publicationStatus;
  $product->pic = $picUrl;

      $product->save();

        return redirect('/product/manage')->with('message','Product Updte Successfully');
  }

  // product delete

  public function deleteProduct($id){
    $productPic = Product::where('id',$id)->first();

    if(file_exists($productPic->pic)){
   unlink($productPic->pic);
  }

   $productDelete = Product::find($id);
   $productDelete->delete();

   return redirect('/product/manage')->with('message','Product Deleted Successfully');

  }
}

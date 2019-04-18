@extends('admin.master')

@section('page-title')
Admin- Product Entry
@endsection

@section('content-heading')
Product Entry 
<h4 style="color: green;">{{ Session::get('message') }}</h4>
@endsection

@section('mainContent')

<div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                
     {!! Form::open(['url'=>'/product/entry','method'=>'post','enctype'=>'multipart/form-data'])!!}
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>

    
         <div class="form-group">
        <label>Category </label>
        <select name="categoryId" class="form-control">
        @foreach($categories as $category)
               <option value='{{ $category->id}}'>{{$category->categoryName}}</option>
               @endforeach   
               </select>
          </div>
      
            <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>

                <div class="form-group">
                       <label>Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
             
                    <div class="form-group">
                        <label>Short Description</label>
        <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description"></textarea>
                    </div>

   
            <div class="form-group">
                        <label>Picture</label>
                        <input type="file"  name="pic">
                    </div>

         <div class="form-group">
        <label>Publication Status</label>
        <select name="publicationStatus" class="form-control">
               <option value='1'>published</option>
               <option value='0'>unpublished</option>
               </select>
    </div>
 
        <div class="form-group">
    <input type="submit" value="submit" class="btn btn-block btn-primary">
    </div>


    {!! Form::close() !!}
                    </div>
                </div>
                </div>
@endsection

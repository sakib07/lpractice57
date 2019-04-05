@extends('admin.master')
@section('page-title')
   Category Entry
@endsection

@section('content-heading')
   Category Entry
   <br>
   {{Session::get('message')}}

@endsection

@section('mainContent')

<div class="panel-body">
        <div class="row">
            <div class="col-lg-6">
                
                {!! Form::open(['url'=>'/category/save','method'=>'post','role'=>'form']) !!}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
        <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description"></textarea>
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
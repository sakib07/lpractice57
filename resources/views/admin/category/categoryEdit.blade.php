@extends('admin.master')

@section('page-title')
Admin: Category Edit
@endsection

@section('content-heading')
Category Edit
@endsection

@section('mainContent')
<div class="row">
            <div class="col-lg-6">
                
                {!! Form::open(['url'=>'/category/edit','method'=>'post', 'name'=>'eidtForm','role'=>'form']) !!}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" name="name" value="{{$category->categoryName}}">
                    </div>
                    <div class="form-group">
                        <label>Short Description</label>
        <textarea class="form-control" name="shortDescription" placeholder="Enter Short Description">{{ $category->shortDescription}}</textarea>
                    </div>

         <div class="form-group">
        <label>Publication Status</label>
        <select name="publicationStatus" class="form-control">
               <option value='1'>published</option>
               <option value='0'>unpublished</option>
               </select>
    </div>
 <input type="hidden" name="categoryId" value='{{ $category->id}}'>
        <div class="form-group">
    <input type="submit" value="submit" class="btn btn-block btn-primary">
    </div>


                    {!! Form::close() !!}
                    </div>
                    <script type="text/javascript">
                    	document.forms['eidtForm'].elements['publicationStatus'].value='{{$category->publicationStatus}}'
                    </script>
                </div>
                </div>
@endsection
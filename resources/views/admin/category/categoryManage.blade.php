@extends('admin.master')

@section('page-title')
Admin: Category Manage
@endsection

@section('content-heading')
Category Control Area<br>

{{ Session::get('message')}}

<h4>Total Item In this Page: {{ $category->count()}}</h4>
<h4>Total Item: {{ $category->total() }}</h4>
<h4>Page No: {{ $category->currentPage() }}</h4>
<h4>From: {{ $category->firstItem() }} No item To {{ $category->lastItem() }} No</h4>
@endsection

@section('mainContent')

<div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>SL.</th>
                <th>Name</th>
                <th>Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $i=0;
        ?>

        @foreach($category as $singleCategory)

            <tr class="odd gradeX">
                <td>{{ ++$i }}</td>
                <td>{{ $singleCategory->categoryName}}</td>
                <td>{{ $singleCategory->shortDescription}}</td>
                <td class="center">{{ ($singleCategory->publicationStatus == 1)? 'published' : 'Unpublished'}}</td>
        <td class="center"><a href="{{url('/category/edit/'.$singleCategory->id) }}"> Edit </a> | <a href="{{url('/category/delete/'.$singleCategory->id) }}"> Delete</a></td>
            </tr>
            @endforeach

            </tbody>
            </table>

       {{$category->links()}}     
            </div>

@endsection
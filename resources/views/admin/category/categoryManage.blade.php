@extends('admin.master')

@section('page-title')
Admin: Category Manage
@endsection

@section('content-heading')
Category Control Area
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
                <td class="center">{{ ($singleCategory->PublicationStatus == 1)? 'Published' : 'Unpublished'}}</td>
                <td class="center">Edit | Delete</td>
            </tr>
            @endforeach

            </tbody>
            </table>
            </div>

@endsection
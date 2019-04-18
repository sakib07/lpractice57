@extends('admin.master')

@section('page-title')
Product Manage
@endsection


@section('content-heading')
Product Manage 
 <hr>
 <h3 style="color: green;">{{ Session::get('message')}}</h3>

@endsection
@section('mainContent')

<?php 
$i=0;
 ?>

  <div class="panel-body">

<h4>Total Item In this Page: {{ $products->count()}}</h4>
<h4>Total Item: {{ $products->total() }}</h4>
<h4>Page No: {{ $products->currentPage() }}</h4>
<h4>From: {{ $products->firstItem() }} No item To {{ $products->lastItem() }} No</h4>

    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>SL.</th>
                <th>Name</th>
                <th>Category Name</th>
                <th>Price</th>
                <th>qty</th>
                <th>Pic</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
        </thead>
       <tbody>
             <tr>
             @foreach($products as $product)
             
               <td>{{ ++$i }}</td>
               <td>{{ $product->productName }}</td>
               <td>{{ $product->catName }}</td>
               <td>{{ $product->price }}</td>
               <td>{{ $product->qty }}</td>
               <td><img src="{{asset($product->pic) }}" width="60" alt="no pic"></td>
               <td>{{ ($product->publicationStatus == 1 )? 'Published' : 'Unpublished' }}</td>
               <td> <a href="{{ url('/product/view/'.$product->id)}}" target="__blank">View</a> | <a href="{{ url('/product/edit/'.$product->id)}}" target="__blank">Edit</a>  | <a href="{{ url('/product/delete/'.$product->id)}}" onclick="return confirm('Are You want To Delete product ?')"> Delete </a> </td>

            </tr>
           @endforeach

       </tbody>
            </table>
          {{ $products->links() }}
            
            </div>
@endsection


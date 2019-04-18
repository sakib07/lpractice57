@extends('admin.master')

@section('page-title')
Single Product 
@endsection

@section('content-heading')
Product Details 
@endsection

@section('mainContent')
 <img src="{{ asset($product->pic) }}" width="300"> <br><hr>
Name: {{ $product->productName }}<br>
Category Name: {{ $product->catName }}<br>
Price: {{ $product->price }}<br>
Quentity: {{ $product->qty }}<br>
<h4>Short Description:</h4> {{ $product->shortDescription }}<br>
Publication Status: {{ ($product->publicationStatus == 1 )? 'Published' : 'Unpublished' }}
@endsection

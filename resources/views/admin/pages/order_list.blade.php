@extends('admin.layout.app')

@section('content')
<div class="wrapper">

    <!-- sidebar  -->
    @include('admin.components.sidebar')

    <div class="main">
    <!-- top header -->
        @include('admin.components.top_header')	
        <main class="content">
            <div class="container-fluid p-0">

                <h1 class="h3 mb-3"><strong>All</strong> Orders</h1>

                <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                       
                       
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                        <th scope="row"><img width="50px" src="{{asset($product->image)}}" alt=""></th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->ammount}}</td>
                        <td>{{$product->quantity}}</td>
                        
                        </tr>
                     @endforeach
                    </tbody>
                    </table>
                </div>

                
            </div>
        </main>

        @endsection
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

                <h1 class="h3 mb-3"><strong>Order</strong> Products</h1>

                <div class="row">
                    <div class="col-md-6">
                        @if(session()->has('error'))
                        <div class="text-danger">{{session('error')}}</div>
                        @endif
                        <form action="{{route('checkout', $product->id)}}" method="POST">
                            @csrf
                            <input type="text" disabled placeholder="Title"  class="form-control mb-3">

                            <input type="text" disabled placeholder="Price"  class="form-control mb-3" value="{{$product->price}}">

                            <input type="number" max="{{$product->quatity}}" placeholder="Quantity" name="qty" class="form-control mb-3">
                            @error('qty')
                                <p>{{$message}}</p>
                            @enderror

                            <input type="text" placeholder="Customer Name" name="name" class="form-control mb-3">
                            @error('name')
                                <p>{{$message}}</p>
                            @enderror

                            <input type="text" placeholder="Customer Phone Number" name="phone" class="form-control mb-3">
                            @error('phone')
                                <p>{{$message}}</p>
                            @enderror

                          
                            <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>
                </div>
                
            </div>
        </main>

        @endsection
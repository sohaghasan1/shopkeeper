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

                <h1 class="h3 mb-3"><strong>Update</strong> Products</h1>

                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('update', $update_products->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                         
                            <input type="text" placeholder="Price" value="{{$update_products->price}}" name="price" class="form-control mb-3">
                            @error('price')
                                <p>{{$message}}</p>
                            @enderror
                          
                            <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>
                </div>
                
            </div>
        </main>

        @endsection
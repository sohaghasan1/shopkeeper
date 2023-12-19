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

                <h1 class="h3 mb-3"><strong>Add</strong> Products</h1>

                <div class="row">
                    <div class="col-md-6">
                        <form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" placeholder="Title" name="name" class="form-control mb-3">
                            @error('name')
                                <p>{{$message}}</p>
                            @enderror
                            <textarea name="desc" placeholder="Description" id="" cols="30" rows="6" class="form-control mb-3"></textarea>
                            @error('desc')
                                <p>{{$message}}</p>
                            @enderror
                            <input type="text" placeholder="Price" name="price" class="form-control mb-3">
                            @error('price')
                                <p>{{$message}}</p>
                            @enderror
                            <input type="text" placeholder="Quantity" name="qty" class="form-control mb-3">
                            @error('qty')
                                <p>{{$message}}</p>
                            @enderror
                            <input type="text" placeholder="Category" name="category" class="form-control mb-3">
                            @error('category')
                                <p>{{$message}}</p>
                            @enderror
                            <input type="file" name="image" class="mb-3">
                            @error('image')
                                <p>{{$message}}</p>
                            @enderror <br>
                            <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>
                </div>
                
            </div>
        </main>

        @endsection
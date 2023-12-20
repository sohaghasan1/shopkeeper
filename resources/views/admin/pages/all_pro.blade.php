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

                <h1 class="h3 mb-3"><strong>All</strong> Products</h1>

                <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Title</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Category</th>
                        <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                        <th scope="row"><img width="50px" src="{{asset($product->image)}}" alt=""></th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->quatity}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('edit', $product->id)}}" class="btn btn-primary">Edit</a>
                               
                                <form action="{{route('delete', $product->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                
                            </div>
                        </td>
                        </tr>
                     @endforeach
                    </tbody>
                    </table>
                </div>

                
            </div>
        </main>

        @endsection
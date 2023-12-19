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

                

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="h3 mb-3"><strong>Add</strong> Category</h1>
                        <form action="{{route('addcategory')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="text" placeholder="Title" name="name" class="form-control mb-3">
                            <textarea name="desc" placeholder="Description" id="" cols="30" rows="6" class="form-control mb-3"></textarea>
                            <input type="submit" class="btn btn-primary" name="submit">
                        </form>
                    </div>
                    <div class="col-md-6">
                    <h1 class="h3 mb-3"><strong>All</strong> Category</h1>
                    </div>
                </div>
                
            </div>
        </main>

        @endsection
@extends('admin.layout')
@section('dashboardContent')
<!-- Navbar Start -->
@include('admin.components.navbar');
<!-- Navbar End -->
<div class="col-sm-12 col-xl-6 m-3">
    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4">Add New Post</h4>

        <!-- Laravel Form Opening -->
        <form action="" method="POST">
            @csrf
            @method('PUT') <!-- Specifying the HTTP method as PUT for updating -->

            <!-- Title Input -->
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title" 
                       placeholder="Title" value="">
                <label for="floatingInput">Title</label>
            </div>

            <!-- Post Content Textarea -->
            <div class="form-floating">
                <textarea class="form-control" placeholder="Post Content" id="floatingTextarea" 
                          name="content" style="height: 150px;"></textarea>
                <label for="floatingTextarea">Post Content</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary mt-3">Save</button>
        </form>
    </div>
</div>

@endsection
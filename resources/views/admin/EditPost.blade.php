@extends('admin.layout')

@section('dashboardContent')
<!-- Navbar Start -->
@include('admin.components.navbar')
<!-- Navbar End -->

<div class="col-sm-12 col-xl-6 m-3">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="bg-light rounded h-100 p-4">
        <h4 class="mb-4">Edit Post</h4>
        <form action="{{ route('EditPost', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="title"
                    placeholder="Title" value="{{ old('title', $post->title) }}">
                <label for="floatingInput">Title</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="Post Content" id="floatingTextarea"
                    name="content" style="height: 150px;">{{ old('content', $post->content) }}</textarea>
                <label for="floatingTextarea">Post Content</label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update Post</button>
        </form>
    </div>
</div>

@endsection
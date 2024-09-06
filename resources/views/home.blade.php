@extends('layouts.app')
@include('components.headerHome')

@section('content')
<!-- Main Content -->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Loop through all posts -->
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('posts.show', $post->id) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ Str::limit($post->content, 40) }}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">{{ $post->user->name }}</a>
                    on {{ $post->created_at->format('F j, Y') }}
                </p>
            </div>
            <hr class="my-4" />
            @endforeach
        </div>
    </div>
</div>
@endsection

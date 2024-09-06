@extends('layouts.app')
@include('components.headerHome')
@section('content')
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post Content -->
                <h2 class="post-title">{{ $post->title }}</h2>
                <p class="post-meta">
                    Posted on {{ $post->created_at->format('F j, Y') }}
                </p>
                <div class="post-body">
                    {!! nl2br(e($post->content)) !!}
                </div>
                <!-- Additional Content -->
                <hr class="my-4" />
                <div class="d-flex justify-content-end mb-4">
                    <a class="btn btn-primary text-uppercase" href="{{ route('HomePosts') }}">Back to Posts</a>
                </div>
            </div>
        </div>
    </div>
</article>

<section>
    <div class="container my-2 py-2">
        <div class="row d-flex">
            <div class="col-md-12 col-lg-10">
                <div class="card text-body">
                    <div class="card-body p-4">
                        <h4 class="mb-0">Recent comments</h4>
                        <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

                        <div class="card-body p-4">
                            <div class="d-flex flex-start">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="60"
                                    height="60" />
                                <div>
                                    <h6 class="fw-bold mb-1">Betty Walker</h6>
                                    <p class="mb-0 mt-1">
                                        It uses a dictionary of over 200 Latin words, combined with a handful of
                                        model sentence structures, to generate Lorem Ipsum which looks
                                        reasonable. The generated Lorem Ipsum is therefore always free from
                                        repetition, injected humour, or non-characteristic words etc.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
    <div class="container text-body">
        <div class="row d-flex">
            <div class="col-md-10 col-lg-8 col-xl-6">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="d-flex flex-start w-100">
                            <img class="rounded-circle shadow-1-strong me-3"
                                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(24).webp" alt="avatar" width="65"
                                height="65" />
                            <div class="w-100">
                                <h5>Add Your a comment</h5>

                                <div data-mdb-input-init class="form-outline">
                                    <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary">
                                        Send <i class="fas fa-long-arrow-alt-right ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('master')
@section('title', 'Blog')
@section('main')

<section class="ftco-section container">
    <h1 class="m-5" align='center'>BLOG</h1>
    <div class="row d-flex">
        @foreach($blogs as $blog)
        <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
                <a href="blog-single.html" class="block-20"
                   style="background-image: url({{ $blog->image }});">
                </a>
                <div class="text py-4 d-block">
                    <div class="meta">
                        <div><a href="#">{{ $blog->created_at }}</a></div>
                        <div><a href="#">Admin</a></div>
                        <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                    </div>
                    <h3 class="heading mt-2"><a href="#">{{ $blog->title }}</a></h3>
                    <p>{{ Str::limit($blog->content, 50) }} <a href="{{ route('blog') }}">see more</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@stop

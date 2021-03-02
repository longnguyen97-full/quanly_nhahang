{{-- SECTION-10 --}}   
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                @foreach($sections as $section)
                @if($section->display == $i)
                <h2 class="mb-4">{{$section->title}}</h2>
                <p>{{$section->content}}</p>
                @endif
                @endforeach
            </div>
        </div>
        <div class="row d-flex">
            @foreach($blogs as $blog)
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a href="blog-single.html" class="block-20"
                       style="background-image: url({{$blog->image}});">
                    </a>
                    <div class="text py-4 d-block">
                        <div class="meta">
                            <div><a href="#">{{$blog->created_at}}</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">{{$blog->title}}</a></h3>
                        <p>{{$blog->content}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
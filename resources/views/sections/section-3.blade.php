{{-- SECTION-3 --}}
<section class="ftco-section ftco-services">
    <div class="container">
        <div class="row">
            @foreach($sections as $section)
            @if($section->display == $i)
            <div class="col-md-4 ftco-animate">
                <div class="media d-block text-center block-6 services">
                    <div class="icon d-flex justify-content-center align-items-center mb-5">
                        <span class="{{ $section->image }}"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">{{ $section->title }}</h3>
                        <p>{{ $section->content }}</p>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>

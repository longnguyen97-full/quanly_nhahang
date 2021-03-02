{{-- SECTION-4 --}}
<section class="ftco-counter ftco-bg-dark img" id="section-counter"
         style="background-image: url({{ $section_5_background }});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    @foreach($sections as $section)
                    @if($section->display == $i)
                    <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <div class="icon"><span class="flaticon-coffee-cup"></span></div>
                                <strong class="number" data-number="100">{{ $section->title }}</strong>
                                <span>{{ $section->content }}</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


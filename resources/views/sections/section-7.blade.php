{{-- SECTION-7 --}}
<section class="ftco-gallery">
    <div class="container-wrap">
        <div class="row no-gutters">
            @foreach($galleries as $gallerie)
            <div class="col-md-3 ftco-animate">
                <a href="gallery.html" class="gallery img d-flex align-items-center"
                   style="background-image: url({{ $gallerie->image }});">
                    <div class="icon mb-4 d-flex align-items-center justify-content-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
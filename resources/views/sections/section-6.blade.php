{{-- SECTION-6 --}}
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section ftco-animate text-center">
                @foreach($sections as $section)
                @if($section->display == $i)
                <span class="subheading">{{ $common_title }}</span>
                <h2 class="mb-4">{{ $section->title }}</h2>
                <p>{{ $section->content }}</p>
                @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            @foreach($homepage_products as $homepage_product)
            <div class="col-md-3">
                <div class="menu-entry">
                    <a href="#" class="img" style="background-image: url({{ $homepage_product->image }});"></a>
                    <div class="text text-center pt-4">
                        <h3><a href="#">{{ $homepage_product->title }}</a></h3>
                        <p>{{ $homepage_product->description }}</p>
                        <p class="price"><span>${{ $homepage_product->price/100 }}</span></p>
                        <p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
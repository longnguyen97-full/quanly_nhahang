{{-- SECTION-2 --}}
@foreach($sections as $section)
@if($section->display == $i)
<section class="ftco-about d-md-flex">
    <div class="one-half img" style="background-image: url({{ $section->image }});"></div>
    <div class="one-half ftco-animate">
        <div class="overlap">
            <div class="heading-section ftco-animate ">
                <span class="subheading">{{$common_title}}</span>
                <h2 class="mb-4">{{ $section->title }}</h2>
            </div>
            <div>
                <p>{{ $section->content }}</p>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
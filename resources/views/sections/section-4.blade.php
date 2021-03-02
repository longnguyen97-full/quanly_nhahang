{{-- SECTION-4 --}}
@foreach($sections as $section)
@if($section->display == $i)
<section class="ftco-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 pr-md-5">
                <div class="heading-section text-md-right ftco-animate">
                    <span class="subheading">{{$common_title}}</span>
                    <h2 class="mb-4">{{$section->title}}</h2>
                    <p class="mb-4">{{$section->content}}</p>
                    <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    @php
                        $arr_img = $section->image;
                        $arr_img = explode(';', $arr_img);
                    @endphp
                    @for($i = 0; $i < count($arr_img); $i++)
                    <div class="col-md-6">
                        @if ($i % 2 != 0)
                            <div class="menu-entry">
                                <a href="#" class="img" style="background-image: url({{$arr_img[$i]}});"></a>
                            </div>
                        @else
                        <div class="menu-entry mt-lg-4">
                            <a href="#" class="img" style="background-image: url({{$arr_img[$i]}});"></a>
                        </div>
                        @endif
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endforeach
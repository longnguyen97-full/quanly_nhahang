{{-- SECTION-8 --}}
<section class="ftco-menu">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                @foreach($sections as $section)
                @if($section->display == $i)    
                <span class="subheading">{{ $common_title }}</span>
                <h2 class="mb-4">{{ $section->title }}</h2>
                <p>{{ $section->content }}</p>
                @endif
                @endforeach
            </div>
        </div>
        <div class="row d-md-flex">
            <div class="col-lg-12 ftco-animate p-md-5">
                <div class="row">
                    <div class="col-md-12 nav-link-wrap mb-5">
                        <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            @php $i = 0 @endphp
                            @foreach($homepage_menus as $homepage_menu)
                            @php $i++ @endphp

                            @if($homepage_menu->name == "Main Dish")
                            <a class="nav-link active" id="v-pills-{{ $i }}-tab" data-toggle="pill" href="#v-pills-{{ $i }}"
                            role="tab" aria-controls="v-pills-{{ $i }}" aria-selected="true">{{ $homepage_menu->name }}</a>
                            @else
                            <a class="nav-link" id="v-pills-{{ $i }}-tab" data-toggle="pill" href="#v-pills-{{ $i }}"
                            role="tab" aria-controls="v-pills-{{ $i }}" aria-selected="true">{{ $homepage_menu->name }}</a>
                            @endif

                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="tab-content ftco-animate" id="v-pills-tabContent">
    
                            @if($i != 0) @php $i = 0 @endphp @endif
                            @foreach($homepage_menus as $homepage_menu)
                            @php $i++; $n = count($homepage_menus) @endphp

                            @if($homepage_menu->name == "Main Dish")
                            <div class="tab-pane fade show active" id="v-pills-{{ $i }}" role="tabpanel"
                                    aria-labelledby="v-pills-{{ $i }}-tab">
                                <div class="row">
                                    @for($j = 0; $j < $n; $j++)
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ $homepage_menu->product[$j]->image }});"></a>
                                            <div class="text">
                                                <h3><a href="#">{{ $homepage_menu->product[$j]->name }}</a></h3>
                                                <p>{{ $homepage_menu->product[$j]->description }}</p>
                                                <p class="price"><span>${{ $homepage_menu->product[$j]->price }}</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>

                            @else
                            <div class="tab-pane fade" id="v-pills-{{ $i }}" role="tabpanel"
                                    aria-labelledby="v-pills-{{ $i }}-tab">
                                <div class="row">
                                    @for($j = 0; $j < $n; $j++)
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <a href="#" class="menu-img img mb-4"
                                                style="background-image: url({{ $homepage_menu->product[$j]->image }});"></a>
                                            <div class="text">
                                                <h3><a href="#">{{ $homepage_menu->product[$j]->name }}</a></h3>
                                                <p>{{ $homepage_menu->product[$j]->description }}</p>
                                                <p class="price"><span>${{ $homepage_menu->product[$j]->price }}</span></p>
                                                <p><a href="#" class="btn btn-primary btn-outline-primary">Add to
                                                        cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            </div>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
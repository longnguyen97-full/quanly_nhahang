<style>
    #dropdownMenuLink {color: #c49b63;}
    input[type=submit]:hover {cursor: pointer;}
</style>

@if(isset($headers))
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('user/images/logo.png')}}" width="120"></a>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About Us</a></li>

                @foreach($headers as $header)
                    @if($header->title == "Online Shop")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{ $header->title }}</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            @foreach($header_childs as $header_child)
                                @if($header_child->parent_id == '1')
                                <a class="dropdown-item" href="{{route("$header_child->link")}}">{{ $header_child->title }}</a>
                                @endif
                            @endforeach
                            </div>
                        </li>

                    @elseif($header->title == "Reservation")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="dropdown02" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">{{$header->title}}</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            @foreach($header_childs as $header_child)
                                @if($header_child->parent_id == '2')
                                <a class="dropdown-item" href="{{route("$header_child->link")}}">{{$header_child->title}}</a>
                                @endif
                            @endforeach
                            </div>
                        </li>

                    @elseif($header->title == "Expands")
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="" id="dropdown03" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Expand</a>

                            <div class="dropdown-menu" aria-labelledby="dropdown01">
                            @foreach($header_childs as $header_child)
                                @if($header_child->parent_id == '3')
                                <a class="dropdown-item" href="{{route("$header_child->link")}}">{{$header_child->title}}</a>
                                @endif
                            @endforeach
                            </div>
                        </li>

                    @else
                        <li class="nav-item"><a href="{{route("$header->link")}}" class="nav-link">{{$header->title}}</a></li>

                    @endif
                @endforeach

                @if(session()->has('member'))

                <li class="nav-item dropdown show">
                    <a href="{{route('sign-in')}}" class="nav-link dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                        <a class="dropdown-item" href="#">Profile</a>
                        <form action="{{ route('handle-Logout') }}" method="post">@csrf
                            <input class="dropdown-item" type="submit" value="Logout"></form>
                    </div>
                </li>
                @else
                <li class="nav-item dropdown show">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-lg"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"> 
                        <a class="dropdown-item" href="{{ route('sign-in') }}">Sign in</a>
                        <a class="dropdown-item" href="{{ route('sign-up') }}">Sign up</a>
                    </div>
                </li>
                {{-- <li class="nav-item"><a href="{{route('sign-in')}}" class="nav-link"><i class="fas fa-user fa-lg"></i></a></li> --}}
                @endif


                <li class="nav-item cart ">
                    <a href="" class="nav-link" data-toggle="dropdown">
                        <span class="icon icon-shopping_cart"></span>
                        <span class="bag d-flex justify-content-center align-items-center"><small>{{ count((array) session('cart')) }}</small></span>
                    </a>

                    <div class="dropdown-menu p-3" style="left: 70%; width: 330px;">
                        <div class="row total-header-section">
                            <div class="col-lg-6 col-sm-6 col-6">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </div>

                            <?php $total = 0 ?>
                            @foreach((array) session('cart') as $id => $details)
                                <?php $total += $details['price'] * $details['quantity'] ?>
                            @endforeach

                            <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                <p>Total: <span class="text-info">$ {{ $total }}</span></p>
                            </div>
                        </div>

                        @if(session('cart'))
                            @foreach(session('cart') as $id => $details)

                                <div class="row">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img" style="margin-top: 14px;">
                                        <img src="{{ $details['image'] }}" width="100px" height="80px"/>
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product" style="margin-top: 22px;">
                                        <p class="text-white">{{ $details['name'] }}</p>
                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                            class="count"> Quantity: {{ $details['quantity'] }}</span>
                                    </div>
                                </div>

                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout mt-3">
                                <a href="{{ url('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif
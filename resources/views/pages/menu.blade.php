@extends('master')
@section('title', 'Menu')
@section('main')

<section class="ftco-section container">
    <h1 class="m-5" align='center'>MENU</h1>
		@foreach($menus as $menu)
		@if($menu->display == 1)
			
			<div class="row" align="center">
				<div class="container">
				  <div class="row">
				    <div class="col-sm">
				      @php
				      	if($menu->idmenu % 2 != 0) {echo "<image width='400' src='$menu->image'>";}
				      @endphp
				    </div>
				    <div class="col-sm-6">
				      @php
				      	if($menu->idmenu % 2 != 0) {
				      		echo "<h2 style='color:#c49b63;'>". $menu->name ."</h2><br>";
				      		echo "<h4>". $menu->description ."</h4>";
				      	}
				      	else {
				      		echo "<h2 style='color:#c49b63;'>". $menu->name ."</h2><br>";
				      		echo "<h4>". $menu->description ."</h4>";
				      	}
				      @endphp
				      <a href="{{ route('product') }}" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a>
				    </div>
				    <div class="col-sm">
				      @php
				      	if($menu->idmenu % 2 == 0) {echo "<image width='400' src='$menu->image'>";}
				      @endphp
				    </div>
				  </div>
				  <br><br><br><br><br>
				</div>
			</div>

		@endif
		@endforeach
</section>

@stop

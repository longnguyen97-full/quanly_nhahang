@if(isset($slides))
<section class="home-slider owl-carousel">
  @foreach($slides as $slide)
  <div class="slider-item" style="background-image: url({{ url($slide->image) }});">
  	<div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-8 col-sm-12 text-center ftco-animate">
        	<span class="subheading">Welcome</span>
          <h1 class="mb-4">{{ $slide->title }}</h1>
          <p class="mb-4 mb-md-5">{{ $slide->content }}</p>
        </div>

      </div>
    </div>
  </div>
  @endforeach
</section>
@endif

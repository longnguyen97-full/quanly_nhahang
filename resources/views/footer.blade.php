@if(isset($footers))
<footer class="ftco-footer ftco-section img">
	<div class="overlay"></div>
  <div class="container">
    <div class="row mb-5">
      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">{{ $ftsec1 }}</h2>
          <p>{{ $ftsec1_content }}</p>
          <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">{{ $ftsec2 }}</h2>
          @foreach($footer_blogs as $footer_blog)
          <div class="block-21 mb-4 d-flex">
            <a class="blog-img mr-4" style="background-image: url({{ $footer_blog->image }});"></a>
            <div class="text">
              <h3 class="heading"><a href="#">{{ $footer_blog->content }}</a></h3>
              <div class="meta">
                <div><a href="#"><span class="icon-calendar"></span> Sept 15, 2018</a></div>
                <div><a href="#"><span class="icon-person"></span> {{ $footer_blog->account_author->position }}</a></div>
                <div><a href="#"><span class="icon-chat"></span> 19</a></div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
         <div class="ftco-footer-widget mb-4 ml-md-4">
          <h2 class="ftco-heading-2">{{ $ftsec3 }}</h2>
          <ul class="list-unstyled">
            <li><a href="#" class="py-2 d-block">Cooked</a></li>
            <li><a href="#" class="py-2 d-block">Deliver</a></li>
            <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
            <li><a href="#" class="py-2 d-block">Mixed</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
        <div class="ftco-footer-widget mb-4">
        	<h2 class="ftco-heading-2">{{ $ftsec4 }}</h2>
        	<div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center">

        <p>{{ $ftsec5 }}</p>

      </div>
    </div>
  </div>
</footer>
@endif
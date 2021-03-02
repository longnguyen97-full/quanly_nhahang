{{-- SECTION-9 --}}
@php $customer_title = 'Testimony'; @endphp
@foreach($sections as $section)
@if($section->display == $i)   
<section class="ftco-section img" id="ftco-testimony" style="background-image: url({{ $section->background }});"
    data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
   <div class="row justify-content-center mb-5">
       <div class="col-md-7 heading-section text-center ftco-animate">
           <span class="subheading">{{ $customer_title }}</span>
           <h2 class="mb-4">{{ $section->title }}</h2>
           <p>{{ $section->content }}</p>
       </div>
   </div>
</div>
@endif
@endforeach
<div class="container-wrap">
   <div class="row d-flex no-gutters">
       @foreach($feedbacks as $feedback)

       {{-- @if($feedback->id_feedback % 2 != 0) --}}


       {{-- @php
           dd($customer)
       @endphp --}}

       <div class="col-lg align-self-sm-end ftco-animate">
           <div class="testimony">
               <blockquote>
                   <p>&ldquo;{{ $feedback->content }}&rdquo;</p>
               </blockquote>
               <div class="author d-flex mt-4">
                   <div class="image mr-3 align-self-center">
                       <img src="{{ asset($feedback->customer->avatar) }}" alt="">
                   </div>
                   <div class="name align-self-center"> {{ $feedback->customer->name }}<span
                           class="position"></span></div>
               </div>
           </div>
       </div>

       {{-- @else  --}}

       {{-- <div class="col-lg align-self-sm-end">
           <div class="testimony overlay">
               <blockquote>
                   <p>&ldquo;{{ $feedback->content }}&rdquo;</p>
               </blockquote>
               <div class="author d-flex mt-4">
                   <div class="image mr-3 align-self-center">
                       <img src="{{ asset($customer->avatar) }}" alt="">
                   </div>
                   <div class="name align-self-center">{{ $customer->name }} <span
                           class="position"></span>{{ $customer->position }}</div>
               </div>
           </div>
       </div>

       @endif --}}

       @endforeach

   </div>
</div>
</section>
@extends('master')
@section('title', 'Home')
@section('main')
@include('slide')

@if(isset($sections))
@php $common_title = "Discover"; $current_section = 0; @endphp
@for($i = 1; $i <= $total_section; $i++)
    @php $current_section++ @endphp
    @if($i == $current_section)
        @include('sections/section-'.$i)
    @endif
@endfor
@include('sections/section-others')
@endif
@stop
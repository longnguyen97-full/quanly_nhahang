<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Widget')
@section('main')

<div class="container cover">
    <div class="row" style="margin-left: -14px">
        <div class="col">
            <div class="header-without_coverbot">
                <input class="btn btn-sm btn-primary" type="button" id="select_all" name="btnSelect" value="Select All" />
                <input class="btn btn-sm btn-primary" type="button" id="deselect_all" name="btnDeselect" value="Deselect All" />
                &nbsp;&nbsp;&nbsp; with Actions &nbsp;&nbsp;&nbsp;
                <select class="btn btn-sm btn-light" name="" id="" style="border: 1px solid #858796">
                    <option selected hidden>Select</option>
                    <option value="0">Display</option>
                    <option value="1">Hidden</option>
                    <option value="2">Delete</option>
                </select>
                <input class="btn btn-sm btn-primary" type="button" id="apply_all" name="btnApply" value="Apply" />
            </div>
        </div>
    </div>
    <div class="row font-weight-bold">
        <div class="col">
            <div class="header-without_coverbot">N.O</div>
        </div>
        <div class="col">
            <div class="header-without_coverbot">Title</div>
        </div>
        <div class="col text-center">
            <div class="header-without_coverbot">Display</div>
        </div>
        <div class="col text-center">
            <div class="header-without_coverbot">Action</div>
        </div>
    </div>
    
    @php $no = 0; @endphp
    @foreach($widgets as $widget)
    @php $no++; $id_widget = $widget->id_widget @endphp
    <form action="{{ route('handle-Widget', $id_widget) }}" method="post">@csrf
    <div class="row select_all">
        <div class="col">
            <div class="content">{{ $no }}</div>
        </div>
        <div class="col">
            <div class="content">{{ $widget->title }}</div>
        </div>
        <div class="col text-center">
            <div class="content">
                @if($widget->display == 0) <input class="circle_ _red" type="submit" name="btnDisplay">
                @else <input class="circle_ _green" type="submit" name="btnDisplay"> @endif
            </div>
        </div>
        <div class="col text-center">
            <div class="content">
                <input class="btn btn-sm btn-danger" type="submit" name="btnDelete" value="Delete">
            </div>
        </div>

        {{-- checkboxes --}}
        <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_widget }}">
    </div>
    </form>
    @endforeach
</div>

@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('admin-theme/js/selectall.js') }}"></script>
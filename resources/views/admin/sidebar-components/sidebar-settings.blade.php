@if(session()->get('position') == session()->get('root'))
<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Sidebar-Settings')
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
                {{-- <span style="margin-left: 300px; font-size: 20px">&#8624;</span> --}}
                <div class="text-autosave ml-5">The change has been saved!</div>
            </div>
        </div>
        <div class="col text-right">
            <div class="header-without_coverbot">
                <input class="btn btn-sm btn-primary" type="button" id="add_new" name="btnAdd" value="Add new" />
                <input class="btn btn-sm btn-primary" type="button" id="cancel" name="btnCancel" value="Cancel" />
            </div>
        </div>
    </div>
    <div class="row font-weight-bold add_new_hide">
        <div class="col">
            <div class="header-without_coverbot">N.O</div>
        </div>
        <div class="col">
            <div class="header-without_coverbot">Title</div>
        </div>
        <div class="col">
            <div class="header-without_coverbot">Link</div>
        </div>
        <div class="col text-center">
            <div class="header-without_coverbot">Display</div>
        </div>
        {{-- <div class="col text-center">
            <div class="header-without_coverbot">Select&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div>
        </div> --}}
        <div class="col text-center">
            <div class="header-without_coverbot">Action</div>
        </div>
    </div>
    
    @php $no = 0; @endphp
    @foreach($sidebars as $sidebar)
    @php $no++; $id_sidebar = $sidebar->id_sidebar @endphp
    <form action="{{ route('handle-Sidebar', [$id_sidebar]) }}" method="post">@csrf
    <div class="row select_all add_new_hide">
        <div class="col">
            <div class="content">{{ $no }}</div>
        </div>
        <div class="col">
            <div class="content">{{ $sidebar->title }}</div>
        </div>
        <div class="col">
            <div class="content">
                <input class="form-checkbox-input textbox-link" type="text" name="txtLink" value="{{ $sidebar->link }}">
                @if($sidebar->parent_id == 0 && $sidebar->dropdown == 1)
                    <input class="btn btn-sm btn-primary" type="submit" name="btnChange" value="Change" disabled>
                @else
                    <input class="btn btn-sm btn-primary" type="submit" name="btnChange" value="Change">
                @endif

            </div>
        </div>
        <div class="col text-center">
            <div class="content">
                @if($sidebar->display == 0) <input class="circle_ _red" type="submit" name="btnDisplay">
                @else <input class="circle_ _green" type="submit" name="btnDisplay"> @endif
            </div>
        </div>
        <div class="col text-center">
            <div class="content">
                <input class="btn btn-sm btn-danger" type="submit" name="btnDelete" value="Delete">
            </div>
        </div>

        {{-- checkboxes --}}
        <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_sidebar }}">
    </div>
    </form>
    @endforeach

    <div class="row font-weight-bold add_new_show">
        <div class="col">
            <div class="header-without_coverbot">
                <form>
                    <div class="row form-group">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Title">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Link">
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Font-awesome">
                        </div>
                        <div class="col">
                            <select class="custom-select" name="sltGroup">
                                <option selected hidden>Select group</option>
                                <option value="0">None</option>
                                @foreach($sidebar_parents as $sidebar_parent)
                                    <option value={{ $sidebar_parent->id_sidebar }}>{{ $sidebar_parent->title }}</option>                                    
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select" name="sltGroup">
                                <option selected hidden>Select display</option>
                                <option value="0">Hidden</option>
                                <option value="1">Visibility</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <input class="btn btn-sm btn-primary" type="button" name="addApply" value="Apply" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

@stop
@endif

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('admin-theme/js/sidebar.js') }}"></script>
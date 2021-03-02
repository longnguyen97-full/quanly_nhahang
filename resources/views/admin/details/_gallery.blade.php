<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Gallery Detail')
@section('main')

<div class="container cover">
    <div class="row" style="margin-left: -14px">
        <div class="col">
            <div class="header-without_coverbot">
                <input class="btn btn-sm btn-primary" type="button" name="btnBack" value="Back" onclick="history.back()" />
            </div>
        </div>
        <div class="col text-right">
            <div class="header-without_coverbot">
                <input class="btn btn-sm btn-primary" type="button" id="add_new" name="btnAdd" value="Add new" />
                <input class="btn btn-sm btn-primary" type="button" id="cancel" name="btnCancel" value="Cancel" />
                <input class="btn btn-sm btn-primary" type="button" id="edit" name="btnEdit" value="Edit" />
            </div>
        </div>
    </div>
    
    <form action="{{ route('handle-Gallery', $_gallery->id_gallery) }}" method="post">@csrf
    <div class="row select_all add_new_hide">
        <div class="col">
            <div class="content">
                <img id="blah-detail" src="{{ asset($_gallery->image) }}" alt="" width="300px">
                <input class="mt-3" type="file" name="imgEdit" accept="image/*" onchange="readURL_detail(this)" disabled>
            </div>
        </div>
    </div>
    <div class="row select_all add_new_hide pb-3">
        <div class="col text-right">
            <input class="btn btn-sm btn-primary" type="submit" id="save" name="btnSave" value="Save" />
        </div>
    </div>
    </form>

    <div class="row font-weight-bold add_new_show">
        <div class="col">
            <div class="header-without_coverbot">
                <form>
                    <div class="row form-group">
                        <div class="col">
                            <img id="blah" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" alt="">
                            <input class="mt-3" type="file" name="imgEdit" accept="image/*" onchange="readURL(this)">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('admin-theme/js/sidebar.js') }}"></script>
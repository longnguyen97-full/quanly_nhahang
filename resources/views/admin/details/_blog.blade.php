<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Product Detail')
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
    
    <form action="{{ route('handle-Product', $_product->id_product) }}" method="post">@csrf
    <div class="row select_all add_new_hide">
        <div class="col">
            <div class="content">
                <img id="blah-detail" src="{{ asset($_product->image) }}" alt="" width="300px">
                <input class="mt-3" type="file" name="imgEdit" accept="image/*" onchange="readURL_detail(this)" disabled>
            </div>
        </div>
        <div class="col">
            <div class="content">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="txtTitle" placeholder="{{ $_product->name }}" disabled>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" name="txtDescription" placeholder="{{ $_product->description }}" disabled>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="text" class="form-control" name="txtPrice" placeholder="{{ $_product->price }}" disabled>
                </div>
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
                        <input type="text" class="form-control" placeholder="Title">
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Description">
                      </div>
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Price">
                          </div>
                        <div class="col">
                            <select class="custom-select" name="sltGroup">
                                <option selected hidden>Select group</option>
                                <option value="0">None</option>
                                @foreach($menus as $menu)
                                    <option value={{ $menu->id_menu }}>{{ $menu->name }}</option>                                    
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
                        <div class="col">
                            <select class="custom-select" name="sltGroup">
                                <option selected hidden>Select homepage</option>
                                <option value="0">Hidden</option>
                                <option value="1">Visibility</option>
                            </select>
                        </div>
                    </div>
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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('admin-theme/css/mystyle.css')}}">
@extends('admin/master')
@section('title', 'Product')
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
        <ul class="nav" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">News</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-second-tab" data-bs-toggle="pill" href="#pills-second" role="tab" aria-controls="pills-second" aria-selected="false">Approved</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-third-tab" data-bs-toggle="pill" href="#pills-third" role="tab" aria-controls="pills-third" aria-selected="false">Completed</a>
              </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-four-tab" data-bs-toggle="pill" href="#pills-four" role="tab" aria-controls="pills-four" aria-selected="false">Trash</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row font-weight-bold">
                    <div class="col">
                        <div class="header-without_coverbot">N.O</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order number</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order date</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Customer</div>
                    </div>
                    <div class="col text-center">
                        <div class="header-without_coverbot">Action</div>
                    </div>
                </div>

                @php $no = 0 @endphp
                @foreach($orders as $order)
                @php $no++; $id_order = $order->id_order @endphp
                @if($order->status == 1)
                <form action="{{ route('handle-Order', $id_order) }}" method="post">@csrf
                <div class="row select_all">
                    <div class="col">
                        <div class="content">{{ $no }}</div>
                    </div>
                    <div class="col">
                        <div class="content">ORDER_{{ $order->id_order }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->order_date }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->customer->fullname }}</div>
                    </div>
                    <div class="col text-center">
                        <div class="content" style="display: flex">
                            <input class="btn btn-sm btn-primary" type="submit" name="btnDetail" value="Detail">&nbsp
                            <input class="btn btn-sm btn-success" type="submit" name="btnApprove" value="Approve">&nbsp;
                            <input class="btn btn-sm btn-danger" type="submit" name="btnCancel" value="Cancel">
                        </div>
                    </div>

                    {{-- checkboxes --}}
                    <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_order }}">
                </div>
                </form>
                @endif
                @endforeach

            </div>
            <div class="tab-pane fade" id="pills-second" role="tabpanel" aria-labelledby="pills-second-tab">
                <div class="row font-weight-bold">
                    <div class="col">
                        <div class="header-without_coverbot">N.O</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order number</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order date</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Customer</div>
                    </div>
                    <div class="col text-center">
                        <div class="header-without_coverbot">Action</div>
                    </div>
                </div>

                @php $no = 0 @endphp
                @foreach($orders as $order)
                @php $no++; $id_order = $order->id_order @endphp
                @if($order->status == 2)
                <form action="{{ route('handle-Order', $id_order) }}" method="post">@csrf
                <div class="row select_all">
                    <div class="col">
                        <div class="content">{{ $no }}</div>
                    </div>
                    <div class="col">
                        <div class="content">ORDER_{{ $order->id_order }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->order_date }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->customer->fullname }}</div>
                    </div>
                    <div class="col text-center">
                        <div class="content" style="display: flex">
                            <input class="btn btn-sm btn-primary" type="submit" name="btnDetail" value="Detail">&nbsp;
                            <input class="btn btn-sm btn-success" type="submit" name="btnComplete" value="Complete">&nbsp
                            <input class="btn btn-sm btn-danger" type="submit" name="btnCancel" value="Cancel">
                        </div>
                    </div>

                    {{-- checkboxes --}}
                    <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_order }}">
                </div>
                </form>
                @endif
                @endforeach
            </div>

            <div class="tab-pane fade" id="pills-third" role="tabpanel" aria-labelledby="pills-third-tab">
                <div class="row font-weight-bold">
                    <div class="col">
                        <div class="header-without_coverbot">N.O</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order number</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order date</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Customer</div>
                    </div>
                    <div class="col text-center">
                        <div class="header-without_coverbot">Action</div>
                    </div>
                </div>

                @php $no = 0 @endphp
                @foreach($orders as $order)
                @php $no++; $id_order = $order->id_order @endphp
                @if($order->status == 3)
                <form action="{{ route('handle-Order', $id_order) }}" method="post">@csrf
                <div class="row select_all">
                    <div class="col">
                        <div class="content">{{ $no }}</div>
                    </div>
                    <div class="col">
                        <div class="content">ORDER_{{ $order->id_order }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->order_date }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->customer->fullname }}</div>
                    </div>
                    <div class="col text-center">
                        <div class="content">
                            <input class="btn btn-sm btn-primary" type="submit" name="btnDetail" value="Detail">
                        </div>
                    </div>

                    {{-- checkboxes --}}
                    <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_order }}">
                </div>
                </form>
                @endif
                @endforeach
            </div>

            <div class="tab-pane fade" id="pills-four" role="tabpanel" aria-labelledby="pills-four-tab">
                <div class="row font-weight-bold">
                    <div class="col">
                        <div class="header-without_coverbot">N.O</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order number</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Order date</div>
                    </div>
                    <div class="col">
                        <div class="header-without_coverbot">Customer</div>
                    </div>
                    <div class="col text-center">
                        <div class="header-without_coverbot">Action</div>
                    </div>
                </div>

                @php $no = 0 @endphp
                @foreach($orders as $order)
                @php $no++; $id_order = $order->id_order @endphp
                @if($order->status == 4)
                <form action="{{ route('handle-Order', $id_order) }}" method="post">@csrf
                <div class="row select_all">
                    <div class="col">
                        <div class="content">{{ $no }}</div>
                    </div>
                    <div class="col">
                        <div class="content">ORDER_{{ $order->id_order }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->order_date }}</div>
                    </div>
                    <div class="col">
                        <div class="content">{{ $order->customer->fullname }}</div>
                    </div>
                    <div class="col text-center">
                        <div class="content">
                            <input class="btn btn-sm btn-primary" type="submit" name="btnDetail" value="Detail">&nbsp;
                            <input class="btn btn-sm btn-success" type="submit" name="btnRestore" value="Restore">&nbsp;
                        </div>
                    </div>

                    {{-- checkboxes --}}
                    <input class="form-check-input checkbox-tick" type="checkbox" name="ckbTick" value="{{ $id_order }}">
                </div>
                </form>
                @endif
                @endforeach
            </div>

          </div>
    </div>
</div>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('admin-theme/js/selectall.js') }}"></script>
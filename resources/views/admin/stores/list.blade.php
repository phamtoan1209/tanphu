@extends('admin._partials.master')
@section('title','Quản lý '.$breadcrumb)
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Danh sách {{$breadcrumb}}
                        </h3>
                        <div class="pull-right">
                            <a href="{{route($actionCreate)}}"><button class="btn btn-xs btn-primary btn-flat">
                                    <i class="fa fa-plus fa-xs"></i>
                                    Thêm {{$breadcrumb}}
                                </button>
                            </a>
                        </div>
                        <div>
                            <form action="{{route($actionList)}}" method="get" class="form-delete">
                                <div class="row">
                                    <div class="col-md-3">
                                        <input type="text" name="name" class="form-control" value="{{ isset($filter['name']) ? $filter['name'] : '' }}" placeholder="Tên cửa hàng hoặc số đt ...">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <select name="city" id="type" class="form-control">
                                                <option value=""> -- Chọn thành tỉnh/phố --</option>
                                                @foreach($listProvince as $k => $v)
                                                    <option value="{{$k}}" {{isset($filter['city']) && $filter['city'] == $k ? 'selected' : ''}}>{{$v}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-warning btn-sm" type="submit"><i class="fa fa-filter"></i> Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên cửa hàng</th>
                                    <th>Số điện thoại</th>
                                    <th>Địa chỉ</th>
                                    <th>Thành phố</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr class='text-success'>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->address}}</td>
                                        <td>{{$listProvince[$item->city]}}</td>
                                        <td>
                                            <div class="rơw">
                                                <div class="form-group">
                                                    <label for="">
                                                        <a href="{{route($actionUpdate,['id'=>$item->id])}}" class="btn btn-xs btn-warning btn-flat" title="Edit">
                                                            <i class="fa fa-cogs"></i> Sửa
                                                        </a>
                                                    </label>
                                                    <label for="">
                                                        <form action="{{route($actionDelete,['id'=>$item->id])}}" method="post" class="form-delete">
                                                            @csrf
                                                            <a href="javascript:void(0)" class="btn btn-xs btn-danger btn-flat btn-delete" title="Delete">
                                                                <i class="fa fa-times"></i> Xóa
                                                            </a>
                                                        </form>
                                                    </label>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                @if(!$datas || count($datas) == 0)
                                    <tr>
                                        <td colspan="5">
                                            {{config('constants.NO_RECORD')}}
                                        </td>
                                    </tr>
                                @endif
                                <tr>
                                    <td colspan="5">
                                        {{ $datas->links() }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>
    </section>
@stop

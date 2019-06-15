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
                        <div>
                            <form action="{{route($actionList)}}" method="get" class="form-delete">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="text" class="form-control" value="{{ isset($filter['text']) ? $filter['text'] : '' }}" placeholder="Nhập tên hoặc email hoặc số điện thoại ...">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <select name="status" id="type" class="form-control">
                                                <option value=""> -- Chọn trạng thái --</option>
                                                <option value="{{$statusRead}}" {{ (isset($filter['status']) && (int)$filter['status'] == $statusRead ) ? 'selected="selected"' : '' }}>Đã đọc</option>
                                                <option value="{{$statusUnRead}}"  {{ (isset($filter['status']) && (int)$filter['status'] == $statusUnRead ) ? 'selected="selected"' : '' }}>Chưa đọc</option>
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
                                    <th>Họ tên</th>
                                    <th>Email</th>
                                    <th>Số điện thọai</th>
                                    <th>Trạng thái</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr class='text-{{($item->status == $statusRead) ? 'success' : 'danger'}}'>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>
                                            @if($item->status == $statusRead)
                                                Đã đọc
                                            @else
                                                Chưa đọc
                                            @endif
                                        </td>
                                        <td>
                                            <div class="rơw">
                                                <div class="form-group">
                                                    <label for="">
                                                        <a href="{{route($actionUpdate,['id'=>$item->id])}}" class="btn btn-xs btn-success btn-flat" title="Edit">
                                                            <i class="fa fa-eye"></i> Xem chi tiết
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

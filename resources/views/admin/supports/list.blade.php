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
                        <br><br>
                        <div>
                            <form action="{{route($actionList)}}" method="get" class="form-delete">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" value="{{ isset($filter['name']) ? $filter['name'] : '' }}" placeholder="Tên hoặc số điện thoại...">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
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
                                    <th>Ảnh đại diện</th>
                                    <th>Họ tên</th>
                                    <th>Số điện thoại</th>
                                    <th>Facebook</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr class='{{($item->status == 0)? 'text-danger' : 'text-success'}}'>
                                        <td>{{$item->id}}</td>
                                        <td>
                                            @if($item->avatar != '')
                                                <img src="{{ asset($item->avatar) }}" alt="{{$item->name}}" width="100">
                                            @endif
                                        </td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->phone}}</td>
                                        <td>{{$item->facebook}}</td>
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
                                        <td colspan="10">
                                            {{config('constants.NO_RECORD')}}
                                        </td>
                                    </tr>
                                @endif
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
@section('css')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/bower_components/select2/dist/css/select2.min.css') }}">
@stop
@section('script')
    <!-- Select2 -->
    <script src="{{ asset('backend/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
@stop


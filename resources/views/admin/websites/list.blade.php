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
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên thông tin</th>
                                    <th>Giá trị</th>
                                    <th>Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    @if($item->key == 'account_mail' && $currentAdmin->username != 'admin'):
                                    @else
                                        <tr class='text-success'>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            @if($item->key != 'logo' && $item->key != 'favicon')
                                                <td>{{$item->value}}</td>
                                            @else
                                                <td><img src="{{asset($item->value)}}" @if($item->key == 'favicon') width="40" @else width="200" @endif alt=""></td>
                                            @endif
                                            <td>
                                                <div class="rơw">
                                                    <div class="form-group">
                                                        <label for="">
                                                            <a href="{{route($actionUpdate,['id'=>$item->id])}}" class="btn btn-xs btn-warning btn-flat" title="Edit">
                                                                <i class="fa fa-cogs"></i> Sửa
                                                            </a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                @if(!$datas || count($datas) == 0)
                                    <tr>
                                        <td colspan="5">
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

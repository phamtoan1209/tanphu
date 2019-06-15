@extends('admin._partials.master')
@section('title','Admin - Create - Update '.$breadcrumb)
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thêm - Sửa - {{$breadcrumb}}</h3>
                    </div>
                    <!-- form start -->
                    <form role="form" method="post" action="{{ isset($item) ? route($actionUpdate,['id'=>$item->id]) : route($actionCreate) }}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Thể loại</label>
                                <select name="type" id="type" class="form-control">
                                    <option value=""> -- Chọn danh mục --</option>
                                    <option value="{{$typeProduct}}" {{(isset($item) && $item->type == $typeProduct ) ? 'selected="selected"' : '' }}>Danh mục sản phẩm</option>
                                    <option value="{{$typePost}}" {{(isset($item) && $item->type == $typePost ) ? 'selected="selected"' : '' }}>Danh mục thi công</option>
                                </select>
                                {!! $errors->first('type') ? '<p class="text-danger">'. $errors->first('type') .'</p>' : ''!!}
                            </div>
                            <div class="form-group">
                                <label>Tên danh mục</label>
                                {!! Form::text('name', old( 'name',isset($item) ? $item->name : ''), ['class' => 'form-control','placeholder'=>"Tên danh mục"]) !!}
                                {!! $errors->first('name') ? '<p class="text-danger">'. $errors->first('name') .'</p>' : ''!!}
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat">Xác nhận</button>
                            <a href="{{route($actionList)}}" class="btn btn-default btn-flat btn-back">Quay lại</a>
                        </div>
                    </form>
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

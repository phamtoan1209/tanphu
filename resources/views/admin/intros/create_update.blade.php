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
                    <form role="form" method="post" action="{{route($actionUpdate,['id'=>$item->id] )}}">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Bài viết giới thiệu</label>
                                {!! Form::textarea('content', old( 'content',isset($item) ? $item->content : ''), ['class' => 'form-control','id'=>'editor1','rows'=>'25','placeholder'=>"Bài viết về sản phẩm"]) !!}
                                {!! $errors->first('content') ? '<p class="text-danger">'. $errors->first('content') .'</p>' : ''!!}
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
@section('script')
    <script src="{{ asset('backend/bower_components/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            CKEDITOR.replace('editor1',{
                uiColor : '#57B900',
                language : 'vi',
                height : '600',
                filebrowserBrowseUrl: '{{ asset('backend/plugins/ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('backend/plugins/ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('backend/plugins/ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('backend/plugins/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
            });
        });
    </script>
@stop

@extends('admin._partials.master')
@section('title','Admin - List '.$modul.'s')
@section('content')
    <section class="content">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            List {{$modul}}s
                        </h3>
                        <div class="pull-right">
                            <a href="{{route($actionCreate)}}"><button class="btn btn-xs btn-primary btn-flat">
                                <i class="fa fa-plus fa-xs"></i>
                                Add {{$modul}}
                            </button>
                            </a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Access</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->access}}</td>
                                        <td>
                                            @if($item->access != 'superadmin')
                                                <div class="rơw">
                                                    <div class="form-group">
                                                        <label for="">
                                                        <a href="{{route($actionUpdate,['id'=>$item->id])}}" class="btn btn-xs btn-warning btn-flat">
                                                            <i class="fa fa-cogs"></i> Edit
                                                        </a>
                                                        </label>
                                                        <label for="">
                                                            <form action="{{route($actionDelete,['id'=>$item->id])}}" method="post" class="form-delete">
                                                                @csrf
                                                                <a href="javascript:void(0)" class="btn btn-xs btn-danger btn-flat btn-delete">
                                                                    <i class="fa fa-times"></i> Delete
                                                                </a>
                                                            </form>
                                                        </label>
                                                    </div>
                                                </div>
                                            @endif
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

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
                                    <th>Full name</th>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr class='{{($item->is_block)? 'text-danger' : 'text-success'}}'>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->fullname}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <div class="rơw">
                                                <div class="form-group">
                                                    @if($item->username != 'admin')
                                                        <label for="">
                                                            <form action="{{route($actionBlock,['id'=>$item->id])}}" method="post" class="form-block">
                                                                {!! Form::hidden('is_block', ($item->is_block) ? 0 : 1 ) !!}
                                                                @csrf
                                                                <a href="javascript:void(0)" class="btn btn-xs bg-{{ ($item->is_block) ? 'gray' : 'green' }} btn-flat btn-block" title="Block" data="{{ ($item->is_block) ? 'unblock' : 'block' }}">
                                                                    <i class="fa fa-{{ ($item->is_block) ? 'lock' : 'unlock' }}"></i>
                                                                    {{ ($item->is_block) ? 'Unblock' : 'Block' }}
                                                                </a>
                                                            </form>
                                                        </label>
                                                        <label for="">
                                                            <a href="{{route($actionUpdate,['id'=>$item->id])}}" class="btn btn-xs btn-warning btn-flat" title="Edit">
                                                                <i class="fa fa-cogs"></i> Edit
                                                            </a>
                                                        </label>
                                                        <label for="">
                                                            <form action="{{route($actionDelete,['id'=>$item->id])}}" method="post" class="form-delete">
                                                                @csrf
                                                                <a href="javascript:void(0)" class="btn btn-xs btn-danger btn-flat btn-delete" title="Delete">
                                                                    <i class="fa fa-times"></i> Delete
                                                                </a>
                                                            </form>
                                                        </label>
                                                    @endif
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

@extends('admin.layouts.app')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Create Site Role</h1>
                </section>
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"></h3>
                    </div>
                    @include('admin.includes.messages')
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form role="form" action="{{ route('role.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-lg-offset-3 col-lg-6">
                                <div class="form-group">
                                    <label for="name">Site Role</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="name">User Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for=='user')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permissions" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Advertisement Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for=='advertisement')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permissions" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="name">Other Permissions</label>
                                        @foreach($permissions as $permission)
                                            @if($permission->for=='other')
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="permissions" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
                                </div> 
                            </div> 
                        </div> 
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
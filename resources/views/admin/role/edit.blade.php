@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Car Brand</h1>
    </section>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('admin.includes.messages')
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('role.update',$role->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}  
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Role Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Role Title" value="{{$role->name }}">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="name">User Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for=='user')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Advertisement Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for=='advertisement')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                            <label for="name">Other Permissions</label>
                            @foreach($permissions as $permission)
                                @if($permission->for=='other')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
                    </div>    
                </div> 
            </div>
            <!-- /.box-body -->
        </form>
        <!-- Main content -->
        <!-- /.content -->
    </div>
    <!-- /.box --> 
</div>
<!-- /.content-wrapper -->
@endsection
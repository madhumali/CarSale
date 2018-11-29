@extends('admin.layouts.app')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Edit Permission</h1>
    </section>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"></h3>
        </div>
        @include('admin.includes.messages')
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" action="{{ route('permission.update',$permission->id) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
            <div class="box-body">
                <div class="col-lg-offset-3 col-lg-6">
                    <div class="form-group">
                        <label for="name">Permission Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" value="{{ $permission->name }}">
                    </div>
                    <div class="form-group">
                        <label for="for">Permission For</label>
                        <select name="for" id="for" class="form-control">
                            <option selected disable>Select Permission For</option>
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                            <option value="employee">Employee</option>
                        </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
                    </div> 
                </div> 
            </div> 
        </form>
        <!-- Main content -->
        <!-- /.content -->
    </div>
    <!-- /.box --> 
</div>
<!-- /.content-wrapper -->
@endsection
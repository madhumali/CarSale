@extends('manager.layouts.app')
@section('headSection')
<!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('admn/bower_components/select2/dist/css/select2.min.css') }}">
	<style>
		.thumb {
			border: 1px solid #ddd !important;  /* Gray border */
			border-radius: 4px !important;  /* Rounded border */
			padding: 5px !important; /* Some padding */
			width: 150px !important; /* Set a small width */
		}
		
		/* Add a hover effect (blue shadow) */
		.thumb:hover {
			box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5) !important;
		}
	</style>
@endsection
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Car Advertisement Edit</h3>
                        </div>
                        @include('manager.includes.messages')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action='{{ route('cars.update',$cars->id) }}' method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH')}}
                        <div class="box-body">
                            <div class="col-lg-6"> 
                                <div class="form-group">
                                    <label for="title">Advertisement Title</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title" value="{{ $cars->title}}">
                                </div>    
                                <div class="form-group">
                                    <label for="title">AdvertisementSubtitle</label>
                                    <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Enter Subitle" value="{{ $cars->subtitle}}">
                                </div> 
                                <div class="form-group">
                                    <label for="title">Advertisement Slug</label>
                                    <input type="text" class="form-control" name="slug" id="slug" placeholder="Enter Slug" value="{{ $cars->slug}}">
                                </div> 
                            </div>
                            <div class="col-lg-6">
                                <br>
                                <div class="form-group">
                                    <div class="pull-right">  
                                        <table>
                                            <tr>
                                                <td><img class="thumb" src="/images/cars/{{ $cars->image }}"></td>
                                                <td><input type="file" name="image" id="image"></td>
                                            </tr>
                                        </table> 
                                    </div>
                                    <div class="checkbox pull-left">
                                        <label>
                                            <input type="checkbox" name="status" value="1" @if ($cars->status == 1) {{'checked'}} @endif ><strong>Editors Choice</strong>
                                        </label>
                                    </div>
                                </div>  
                                <br>
                                <div class="form-group" style="margin-top:18px;">
                                    <label>Select Advertisement Tags</label>
                                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="tags[]">
                                        @foreach($tags as $tag )
                                            <option value="{{ $tag->id}}"
                                                @foreach($cars->tags as $carTag)
                                                    @if($carTag->id == $tag->id)
                                                        selected 
                                                        @endif
                                                @endforeach
                                        >{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group" style="margin-top:18px;">
                                    <label>Select Advertisement Category</label>
                                    <select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" tabindex="-1" aria-hidden="true" name="categories[]">
                                        @foreach($categories as $category )
                                            <option value="{{ $category->id }}"
                                                @foreach($cars->categories as $carCategory)
                                                    @if($carCategory->id == $category->id)
                                                        selected 
                                                    @endif
                                                @endforeach
                                            >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>  
                        </div>
                        <!-- /.box-body -->
                        <!-- Main content -->
                        <section class="content">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Advertisement Content</h3>
                                            <div class="pull-right box-tools">
                                                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                            </div>
                                        </div>
                                        <!-- /.box-header -->
                                        <div class="box-body pad">
                                            <textarea name="body" id="editor1"  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $cars->body}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-->
                            </div>
                            <!-- ./row -->
                        </section>
                        <div class="box-footer">
                            <button name="submit" id="submit" type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('cars.index') }}" class="btn btn-warning">Back</a>
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
@section('footerSection')
<!-- CK Editor -->
<script src="//cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
<script>
$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
})
</script>
<!-- Select2 -->
<script src="{{ asset('admn/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $(".select2").select2();
    });
</script>
@endsection
@extends('admin.layouts.app')
@section('headSection')
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('admn/bower_components/select2/dist/css/select2.min.css') }}">
@endsection
@section('content')
    

<div class="content-wrapper">
        <!-- Main content -->
    <section class="content">
        
        <h1>Posts</h1>
        <div class="float-right">
            <a class="btn btn-success" href="/testrides">Add a Testride</a>
        </div>
        @if(count($testrides)>1)
            @foreach($testrides as $testride)
                <div class="well">
                <h3><a href="/posts/{{$testride->id}}">{{$testride->name}} {{$testride->telephone}}</a></h3>
                </div>
            @endforeach
        @else
            <p>No post found</p>
        @endif
    </section>
</div>

@endsection

@extends('main/app')
@section('title','RPN-Advertisements')
@section('content')
<div class="page">
    <div id="breadcrumb-section" class="section">
        <div class="container">
            <div class="page-title text-center">
                <h1>Contact Us</h1>
            </div>
        </div>
    </div><!-- breadcrumb-section -->

    <div class="ad-post-wrapper section">
        <div class="container">
            <div class="contact-us">
                {{-- <div class="map-wrapper">map part is goes here
                    <div id="gmap"></div>
                </div> --}}
                <div class="contact-form-wrapper">
                    {{-- contact controller eke store function eka balapn --}}
                    <form id="contact-form" class="contact-form" name="contact-form" method="POST" action="{{route('contact.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" required="required" placeholder="Email Id">
                                </div> 
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" required="required" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" name="message" required="required" class="form-control" rows="10" placeholder="Enter your text"></textarea>
                                </div>             
                            </div>     
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" class="btn btn-primary" value="Save">Submit Message</button>
                        </div>
                    </form><!-- contact form -->  
                </div> 
            </div>
        </div>
    </div> <!-- ad-post -->
</div>	<!-- page -->
@endsection
@extends('main/app')
@section('title','RPN-Advertisements')
@section('headSection')
    <style>
        /* Set the size of the div element that contains the map */
       #map {
         height: 400px;  /* The height is 400 pixels */
         width: 100%;  /* The width is the width of the web page */
        }
     </style>
@endsection
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
                <br>
                <br>
                <h2>Leave Your Message Here</h2>
                <br>
                <br>
                <div class="contact-form-wrapper">
                    @include('main.includes.messages')
                    <form id="contact-form" class="contact-form" name="contact-form" method="POSt" action="{{ route('contact.store') }}">
                        {{ csrf_field() }}
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
                <br>
                <br>
                <div class="map-wrapper">
                    <h2>Our Location</h2>
                    {{-- <div id="gmap"></div> --}}
                    <div id="map"></div>
                    <script>
                        // Initialize and add the map
                        function initMap() {
                        // The location of Uluru
                        var uluru = {lat: -25.344, lng: 131.036};
                        // The map, centered at Uluru
                        var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 4, center: uluru});
                        // The marker, positioned at Uluru
                        var marker = new google.maps.Marker({position: uluru, map: map});
                        }
                            </script>
                            <!--Load the API from the specified URL
                            * The async attribute allows the browser to render the page while the API loads
                            * The key parameter will contain your own API key (which is not needed for this tutorial)
                            * The callback parameter executes the initMap() function
                            -->
                            <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
                    </script>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div> <!-- ad-post -->
</div>	<!-- page -->
@endsection
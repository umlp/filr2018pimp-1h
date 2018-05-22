<!-- col-xs col-sm col-md col-lg -->

@extends('layouts.app')

@section('content')
  <!-- <style>
      #lateral {
          background-color: red;
      }
  </style> -->
<!--
    <div id="lateral" class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="col-sm-12">
            <p> Menu </p>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <p> Barre gauche </p>
            </div>
            <div class="col-sm-9">
                <p> Col B2 </p>
            </div>
        </div>
    </div> -->

    <div id="map"></div>

    <script>
    function myMap() {
      var mapOptions = {
          center: new google.maps.LatLng(51.5, -0.12),
          zoom: 10,
          mapTypeId: google.maps.MapTypeId.HYBRID
      }
      var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdTJXjmoCiT53tElKKi_UnG6vBJJMSxws&callback=myMap"></script>


@endsection

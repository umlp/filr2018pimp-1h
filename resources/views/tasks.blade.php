<!-- col-xs col-sm col-md col-lg -->

@extends('layouts.app')

@section('content')
<div class="container">
    <div id="maps"></div>
</div>

<footer>
    <script>
        $(function() {
            initializeMap();
        });

        function initializeMap() {
            var myOptions = {
                center: new google.maps.LatLng(49.386078, 1.067933),
                zoom: 14,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            new google.maps.Map(document.getElementById("maps"), myOptions);
        }
    </script>
</footer>
@endsection

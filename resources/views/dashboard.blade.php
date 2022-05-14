@extends('layouts.main', ['activePage' => 'dashboard', 'title' => 'Kosmos Rastreo', 'navName' => 'Dashboard', 'activeButton' => 'laravel'])

@section('content')
    <div id="map" style="  width: 100%;"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCI9KYYmGxX3_PpRTjvzimwhlfRmemqH7g&callback=initMap&v=weekly&channel=2" async></script>

@endsection

@push('js')
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script type="text/javascript">
        $(document).ready(function() {

             // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();


        });
        
                function initMap() {
        // The location of Uluru
        const uluru = { lat: 19.43279402215198, lng: -99.13270064720409 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
        }
    </script>
@endpush
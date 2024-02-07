<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contoh Peta</title>
  <!-- Tambahkan Google Maps API -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <div id="map"></div>

  <script>
    // Fungsi untuk menginisialisasi peta
    function initMap() {
      // Koordinat awal
      var myLatLng = {lat: -34.397, lng: 150.644};

      // Buat objek peta dengan koordinat dan zoom awal
      var map = new google.maps.Map(document.getElementById('map'), {
        center: myLatLng,
        zoom: 8
      });

      // Tambahkan marker ke peta
      var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        title: 'Hello World!'
      });

      // Tambahkan info window pada marker
      var infowindow = new google.maps.InfoWindow({
        content: 'Ini adalah contoh peta!'
      });

      // Tampilkan info window saat marker diklik
      marker.addListener('click', function() {
        infowindow.open(map, marker);
      });
    }
  </script>
</body>
</html>

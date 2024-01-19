<!DOCTYPE html>
<html>
<head>
  <title>IP-based Location Map</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map {
      height: 400px;
      width: 100%;
    }
  </style>
</head>
<body>
  <h1>Your Location (Based on IP)</h1>
  <p id="location"></p>
  <div id="map"></div>

  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    function showLocation(data) {
      var locationElement = document.getElementById("location");
      if (data && data.latitude && data.longitude) {
        var latitude = data.latitude;
        var longitude = data.longitude;
        locationElement.innerHTML = "Latitude: " + latitude + "<br>Longitude: " + longitude;

        var map = L.map('map').setView([latitude, longitude], 10);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([latitude, longitude]).addTo(map);
        var popupContent = "Your approximate location";
        marker.bindPopup(popupContent).openPopup();

        fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latitude}&lon=${longitude}&zoom=18&addressdetails=1`)
          .then(response => response.json())
          .then(data => {
            var address = data.display_name || "Address not found";
            locationElement.innerHTML += "<br>Address: " + address;
          })
          .catch(error => {
            console.log('Error:', error);
            locationElement.innerHTML += "<br>Address not found";
          });
      } else {
        locationElement.innerHTML = "Location based on IP not available.";
      }
    }

    fetch('https://ipapi.co/json/')
      .then(response => response.json())
      .then(data => showLocation(data))
      .catch(error => {
        console.log('Error:', error);
        var locationElement = document.getElementById("location");
        locationElement.innerHTML = "Location based on IP not available.";
      });
  </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Routing Map with OpenStreetMap and GraphHopper</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.css" />
</head>
<body>
    <div style="margin: 10px;">
        <div style="margin-bottom: 7px">
            <input type="text" id="routeFrom" name="routeFrom" placeholder="Origin address" />
        </div>
        <div style="margin-bottom: 12px">
            <input type="text" id="routeTo" name="routeTo" placeholder="Destination address" />
            <br />
        </div>
        <button id="routeGo" class="btn btn-primary btn-sm" style="width: 100%;">Route</button>
    </div>
    <div id="map_canvas" style="width: 100%; height: 400px;"></div>

    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script src="https://unpkg.com/leaflet-routing-machine@3.2.12/dist/leaflet-routing-machine.js"></script>
    <script>
        var map = L.map('map_canvas').setView([9.672948000000002, 123.87300219999997], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var routeControl;

        document.getElementById('routeGo').addEventListener('click', function () {
            var routeFrom = document.getElementById('routeFrom').value;
            var routeTo = document.getElementById('routeTo').value;

            if (routeControl) {
                map.removeControl(routeControl);
            }

            // Geocode the origin and destination addresses using Nominatim
            geocodeAddress(routeFrom, function (originCoords) {
                geocodeAddress(routeTo, function (destCoords) {
                    if (originCoords && destCoords) {
                        routeControl = L.Routing.control({
                            waypoints: [
                                L.latLng(originCoords.lat, originCoords.lon),
                                L.latLng(destCoords.lat, destCoords.lon)
                            ],
                            routeWhileDragging: true
                        }).addTo(map);
                    }
                });
            });
        });

        function geocodeAddress(address, callback) {
            fetch(`https://nominatim.openstreetmap.org/search?format=json&q=${address}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length > 0) {
                        var result = data[0];
                        var coordinates = {
                            lat: parseFloat(result.lat),
                            lon: parseFloat(result.lon)
                        };
                        callback(coordinates);
                    } else {
                        console.error('Geocoding failed for address: ' + address);
                        callback(null);
                    }
                })
                .catch(error => {
                    console.error(error);
                    callback(null);
                });
        }
    </script>
</body>
</html>

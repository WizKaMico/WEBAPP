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
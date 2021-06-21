<div id="map"></div>
<style>
    html,
    body,
    #map {
        height: 100%;
        width: auto;
        padding: 0;
        margin: 0;
        z-index: 0;
    }
</style>
<script src="<?= base_url() ?>assets2/js/jquery.min.js"></script>

<!-- Leaflet (JS/CSS) -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css">
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
<!-- Leaflet-KMZ -->
<script src="https://unpkg.com/leaflet-kmz@latest/dist/leaflet-kmz.js"></script>
<script>
    var map = L.map('map', {
        preferCanvas: true, // recommended when loading large layers.
        center: [51.505, -0.09],
        zoom: 13
    });
    map.setView(new L.LatLng(-6.910612855364527, 106.21899281722726), 13);

    var OpenTopoMap = L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
        maxZoom: 17,
        // attribution: 'Map data: &copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)',
        opacity: 0.90
    });
    OpenTopoMap.addTo(map);

    // Instantiate KMZ layer (async)
    var kmz = L.kmzLayer().addTo(map);

    kmz.on('load', function(e) {
        control.addOverlay(e.layer, e.name);
        // e.layer.addTo(map);
    });

    // Add remote KMZ files as layers (NB if they are 3rd-party servers, they MUST have CORS enabled)
    kmz.load('<?= base_url('assets/peta_rendaman.kmz') ?>');


    var control = L.control.layers(null, null, {
        collapsed: false
    }).addTo(map);
</script>
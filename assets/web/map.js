// Titik Taman Nasional
var taman = new L.LayerGroup();

// Basemap
var map = L.map('map', { 
    center: [-7.6145, 110.2000], 
    zoom: 7,
    zoomControl: false,
    layers:[] 
});

function iconByName(name) {
	return '<i class="icon icon-'+ name +'"></i>';
}

var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 22, 
    attribution: 'Rafli Ortega Jaya'
}).addTo(map);

var GoogleMaps = new 
L.TileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', { opacity: 1.0, 
attribution: 'Rafli Ortega Jaya' 
});

var baseMaps = {
    "Open Street Map": osm,
    "Google Maps": GoogleMaps
};

var overlayMaps = {
    "Taman Nasional": taman
};


var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);

L.Control.geocoder({position :"topleft", collapsed:true}).addTo(map);

/* GPS enabled geolocation control set to follow the user's location */ 
var locateControl = L.control.locate({ 
    position: "topleft", 
    drawCircle: true, 
    follow: true, 
    setView: true, 
    keepCurrentZoomLevel: true, 
    markerStyle: { 
        weight: 1, 
        opacity: 0.8, 
        fillOpacity: 0.8 
        }, 
        circleStyle: { 
        weight: 1, 
        clickable: false 
        }, 
        icon: "fa fa-location-arrow", 
        metric: false, 
        strings: { 
            title: "My location", 
            popup: "You are within {distance} {unit} from this point", 
            outsideMapBoundsMsg: "You seem located outside the boundaries of the map" 
        }, 
        locateOptions: { 
        maxZoom: 18, 
        watch: true, 
        enableHighAccuracy: true, 
        maximumAge: 10000, 
        timeout: 10000 
        } 
}).addTo(map);

var zoom_bar = new L.Control.ZoomBar({position: 'topleft'}).addTo(map);

L.control.coordinates({ 
    position:"bottomleft", 
    decimals:2, 
    decimalSeperator:",", 
    labelTemplateLat:"Latitude: {y}", 
    labelTemplateLng:"Longitude: {x}" 
}).addTo(map);
/* scale */
L.control.scale({metric: true, position: "bottomleft"}).addTo(map);
      
// Draw Toolbar
map.pm.addControls({  
        position: 'topleft',  
        drawCircleMarker: false,
        rotateMode: false,
      });


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="WebGIS Persebaran Taman Nasional">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/material-dashboard-master/assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?=base_url('assets/material-dashboard-master/assets/img/favicon.png')?>">
  <title>
    WebGIS - Rafli Ortega Jaya
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="<?=base_url('assets/material-dashboard-master/assets/css/nucleo-icons.css')?>" rel="stylesheet" />
  <link href="<?=base_url('assets/material-dashboard-master/assets/css/nucleo-svg.css')?>" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="<?=base_url('assets/material-dashboard-master/assets/css/material-dashboard.css?v=3.0.0')?>" rel="stylesheet" />
  
  <!-- Custom styles for this template -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  <!-- Leafletjs CSS -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="<?=base_url('assets/material-dashboard-master/assets/img/logo-ct.png')?>" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Rafli Ortega Jaya</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/dashboard.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Home</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Home</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Peta Persebaran Taman Nasional Pulau Jawa</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row min-vh-80 h-100">
        <div class="col-12">

          <!-- Leaflet Map JS -->
          <div class="content"> 
            <div id="map" style="width: 100%; min-height: 84vh; color: black; position: relative;"></div> 
          </div>
        </div>
    </div>
    <footer class="footer pt-5">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn btn-outline-dark w-100" href="">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/core/popper.min.js')?>"></script>
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/core/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/plugins/perfect-scrollbar.min.js')?>"></script>
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/plugins/smooth-scrollbar.min.js"')?>"></script>
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/plugins/chartjs.min.js"')?>"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url('assets/material-dashboard-master/assets/js/material-dashboard.min.js?v=3.0.0')?>"></script>

  <!-- Leaflet JS -->
    <link rel="stylesheet" href="<?=base_url()?>assets/leaflet.groupedlayercontrol.css" /> 
    <script src="<?=base_url()?>assets/leaflet.groupedlayercontrol.js"></script>

    <link rel="stylesheet" href="<?=base_url()?>assets/Control.MiniMap.css" /> 
    <script src="<?=base_url()?>assets/Control.MiniMap.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" /> 
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

    <link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css"> 
    <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/L.Control.ZoomBar.css"/> 
    <script type="text/javascript" src="<?=base_url()?>assets/L.Control.ZoomBar.js"></script>

    <link rel="stylesheet" href="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.css"/>
    <script type="text/javascript" src="<?=base_url()?>assets/Leaflet.Coordinates-0.1.5.min.js"></script> 
    
    <link rel="stylesheet" href="<?=base_url()?>assets/leaflet.legend.css"/>
    <script type="text/javascript" src="<?=base_url()?>assets/leaflet.legend.js"></script>'
    
    <link rel="stylesheet" href="<?=base_url()?>assets/leaflet-panel-layers.css"/>
    <script src="<?=base_url()?>assets/leaflet-panel-layers.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/leaflet-geosearch@3.0.0/dist/geosearch.umd.js"></script>

    <!-- Draw Toolbar -->
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css"/>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>

    
    <!-- Setting Map -->
    <script>

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

// Point Taman Nasional
      $.getJSON("<?=base_url()?>assets/titik_taman.geojson",function(data){ 
            var ratIcon = L.icon({ 
                iconUrl: '<?=base_url()?>assets/images/icon.png', 
                iconSize: [20,20] 
            });
            L.geoJson(data,{ 
                pointToLayer: function(feature,latlng){ 
                var marker = L.marker(latlng,{icon: ratIcon}); 
                marker.bindPopup('<h5><b><center>' + feature.properties.Nama + '</center></b></h5>' + '<h6><b>' + feature.properties.Prov + '</b></h6>' + 
                feature.properties.Deskripsi + '<br>' + '<br> <center>' + '<img src="'+ feature.properties.Gambar +'" style="width:300px;height:150px;">'); 
                return marker; 
                } 
            }).addTo(taman); 
    });
    </script>
</body>

</html>
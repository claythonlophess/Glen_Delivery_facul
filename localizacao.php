<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- leaflet css  -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />

  <style>
    #map {
      width: 100%;
      height: 50vh;
    }

    .coordinate {
      position: absolute;
      bottom: 10px;
      right: 50%;
    }

    .field {
      border-bottom: groove;
      border-block-start-style: none;
      border-left-style: none;
      border-right-style: none;
      height: 60px;
    }

    .leaflet-popup-content-wrapper {
      background-color: #000000;
      color: #fff;
      border: 1px solid red;
      border-radius: 0px;
    }
  </style>

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>
  <main id="main" class="main">
    <div id="" class=" d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between icon">
        <h6><a href="http://localhost/NiceAdmin/index.php?acao=pacote-3&pesquisa=&ordem=&tabela=home#"><img src="icons/back_to_30px.png" alt="">Voltar</a></h6>
      </div>

      <nav class="header-nav ms-auto">
        <span style="padding-right: 25px;"> cancelar</span>
      </nav><!-- End Icons Navigation -->

    </div><!-- End Header -->

    <div class="pagetitle">
      <h1>Adicione o local de recolha e de entrega.</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <div class="progress" style="height: 10px;">
          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>

        <div class="col-md-12  order-md-last">
          <div class="img">
            <img src="img/banner-topo-BLOG-1200-x-400-49-1280x720.png" alt="" style="width: -webkit-fill-available;">
          </div>
        </div>
        <div class="col-lg-6">

          <div class="">
            <div class="card-body">
              <h4><strong>Local de Recolha</strong></h4>

              <!-- General Form Elements -->
              <form method="post" action="http://localhost/NiceAdmin/index.php?acao=pagamento&pesquisa=&ordem=&tabela=home#">

                <select class="form-select field" name="tipo_estrutura_r" aria-label="Default select example">
                  <option selected="">Casa</option>
                  <option value="1">Predio</option>
                  <option value="2">Outros</option>
                </select>
                <div class="text-center">
                  <label for="inputName5" class="form-label">Apartamento</label>
                </div>
                <div class=" mb-3">
                  <input type="text" name="apart_r" class="form-control field" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="text-center">
                  <label for="inputName5" class="form-label">Andar</label>
                </div>
                <div class=" mb-3">
                  <input type="text" name="andar_r" class="form-control field" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <h4><strong>Local de Entrega</strong></h4>



                <select class="form-select field" name="tipo_estrutura_e" aria-label="Default select example">
                  <option selected="">Casa</option>
                  <option value="1">Predio</option>
                  <option value="2">Outros</option>
                </select>
                <div class="text-center">
                  <label for="inputName5" class="form-label">Apartamento</label>
                </div>
                <div class=" mb-3">
                  <input type="text" name="apart_e" class="form-control field" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="text-center">
                  <label for="inputName5" class="form-label">Andar</label>
                </div>
                <div class=" mb-3">
                  <input type="text" name="andar_e" class="form-control field" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <div class="col-md-12  order-md-last">

                  <div class="card-body" id="localMap">
                    <div class="form-check form-switch">
                      <i class="ri-map-pin-add-fill"></i>
                      <input class="form-check-input" type="checkbox" id="checkboxLocal">
                      <label class="form-check-label" for="checkboxLocal">Adicionar localizacao</label>
                    </div>
                    <input type="hidden" required name='txtstart' id='txtstart' style='width:250px' value=''>
                  </div>
                </div>

                <div class="text-center" style="padding-top: 100px;">
                  <button type="submit" class="btn btn-primary w-100">Next<< /button>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>
  </main><!-- End #main -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<!-- leaflet js  -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<script src="./data/point.js"></script>
<script src="./data/line.js"></script>
<script src="./data/polygon.js"></script>


<script>
  let txtstart = document.getElementById("txtstart");
  var map;
  var lat;
  var log;
  var watchID;
  const checkbox = document.getElementById('checkboxLocal')

  function addDivLocal() {
    var div = document.createElement('div');
    div.id = "map";
    document.getElementById("localMap").appendChild(div);
    var div1 = document.createElement('div');
    div1.setAttribute('class', 'leaflet-control coordinate');
    document.getElementById("map").appendChild(div1);
    watchID = navigator.geolocation.watchPosition(success, error, {
      enableHighAccuracy: true,
      timeout: 10000
    });
  }
  checkbox.addEventListener('change', (event) => {
    if (event.currentTarget.checked) {
      addDivLocal();
    } else {
      document.getElementById("checkboxLocal").checked = false;
      var elem = document.getElementById("map");
      elem.parentNode.removeChild(elem);
      navigator.geolocation.clearWatch(watchID);
    }
  });



  function success(pos) {
    console.log(pos.coords.latitude, pos.coords.longitude);
    lat = pos.coords.latitude;
    log = pos.coords.longitude;
    document.querySelector("[name='txtstart']").value = `Latitude:${pos.coords.latitude}, Longitude:${pos.coords.longitude}`;

    if (map === undefined) {
      map = L.map('map').setView([lat, log], 20);
    } else {
      map.remove();
      map = L.map('map').setView([lat, log], 20);
    }
    /*==============================================
              TILE LAYER and WMS
  ================================================*/
    //osm layer
    var osm = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });
    osm.addTo(map);

    // map.addLayer(osm)

    // water color 
    var watercolor = L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.{ext}', {
      attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      subdomains: 'abcd',
      minZoom: 1,
      maxZoom: 16,
      ext: 'jpg'
    });
    //watercolor.addTo(map)

    // dark map 
    var dark = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
      subdomains: 'abcd',
      maxZoom: 19
    });
    // dark.addTo(map)

    // google street 
    googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    // googleStreets.addTo(map);

    //google satellite
    googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
      maxZoom: 20,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    googleSat.addTo(map)

    var wms = L.tileLayer.wms("http://localhost:8080/geoserver/wms", {
      layers: 'geoapp:admin',
      format: 'image/png',
      transparent: true,
      attribution: "wms test"
    });



    /*==============================================
                        MARKER
    ================================================*/
    var myIcon = L.icon({
      iconUrl: 'img/red_marker.png',
      iconSize: [40, 40],
    });
    var singleMarker = L.marker([lat, log], {
      icon: myIcon,
      draggable: true
    });
    var popup = singleMarker.bindPopup('Vc esta aqui. ' + singleMarker.getLatLng()).openPopup()
    popup.addTo(map);

    var secondMarker = L.marker([lat, log], {
      icon: myIcon,
      draggable: true
    });

    console.log(singleMarker.toGeoJSON())


    /*==============================================
                GEOJSON
    ================================================*/
    var pointData = L.geoJSON(pointJson).addTo(map)
    var lineData = L.geoJSON(lineJson).addTo(map)
    var polygonData = L.geoJSON(polygonJson, {
      onEachFeature: function(feature, layer) {
        layer.bindPopup(`<b>Name: </b>` + feature.properties.name)
      },
      style: {
        fillColor: 'red',
        fillOpacity: 1,
        color: '#c0c0c0',
      }
    }).addTo(map);

    /*==============================================
                    LAYER CONTROL
    ================================================*/
    var baseMaps = {
      "OSM": osm,
      'Google Street': googleStreets,
      "Google Satellite": googleSat,
    };
    var overlayMaps = {};

    L.control.layers(baseMaps, overlayMaps, {
      collapsed: false
    }).addTo(map);
  }

  function error(err) {
    document.getElementById("checkboxLocal").checked = false;
    var elem = document.getElementById("map");
    elem.parentNode.removeChild(elem);
    console.log(err);
  }
</script>
var getUrl = window.location;
var base_url = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

var query = window.location.href;
var query = new URL(query);
var result = query.searchParams.get("q");
var mymap;
var mark_new = L.layerGroup(), mark_exis = L.layerGroup(), mark_analisa = L.layerGroup(), mark_tower = L.layerGroup();

$(document).ready(function () {
    showMap();
    legendMode();
    getTowerPerusahaan();
    getZonaPlan();
    getTower();
});

$("#new").change(function() {
    if ($(this).is(':checked')) {
     getZonaNew();
 } else {
    mymap.removeLayer(mark_new);
    mark_new.clearLayers();
}
});

$("#existing").change(function() {
    if($(this).is(':checked')) {
     getExistingNew();
 } else {
    mymap.removeLayer(mark_exis);
    mark_exis.clearLayers();
}
});

$(".check_perusahaan").change(function() {
    if($(this).is(':checked')) {
        alert("true");
    } else {
        alert("false");
    }
});


$('#getLocationNow').click(function(e){
 e.preventDefault();
 if(!navigator.geolocation) {
    alert("Tidak support GPS Location.");
} else {
    navigator.geolocation.getCurrentPosition(function(position) {
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        $("input[name='latitude_analisa']").val(lat);
        $("input[name='longitude_analisa']").val(long);
        showMarkerAnalisa(lat, long);
    });
}
});

$('#form-analisa').submit(function(e){
    e.preventDefault();

    mymap.removeLayer(mark_analisa);
    mark_analisa.clearLayers();

    $('#btn-Analisa').text('Loading...');
    $('#showKeterangan').html('<center>'+loading+'</center>');

    var lat = $("input[name='latitude_analisa']").val();
    var long = $("input[name='longitude_analisa']").val();

    setTimeout(function(){ 
        showMarkerAnalisa(lat, long);
        $('#btn-Analisa').text('Analisa');
    }, 2000);
});

function getTower() {
    $.ajax({
        type:"GET",
        url:API_TOWER,
        beforeSend:function(){
            $('#tot-existing-filter').html(spinner);
        },
        success:function(res){
            var tot_tower = res.data.length;
            $('#tot-existing-filter').html(`<span class="badge badge-primary-soft p-2 font-w-7 text-purple">${tot_tower}</span>`);
        }
    });
}

function getZonaPlan() {
    $.ajax({
        type:"GET",
        url:API_ZONA,
        beforeSend:function(){
            $('#tot-zona-filter').html(spinner);
        },
        success:function(res){
            var tot_zona = res.data.length;
            $('#tot-zona-filter').html(`<span class="badge badge-primary-soft p-2 font-w-7 text-purple">${tot_zona}</span>`);         
        }
    });
}

function showMap(mode = "http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}")
{
    mymap = L.map("map", {
        maxZoom: 20,
        minZoom: 13,
        zoomControl: true,
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topleft'
        }
    }).setView([-2.114513513758284, 106.10941371571977], 14);

    L.tileLayer(
        mode,
        {
            maxZoom: 20,
            subdomains:['mt0','mt1','mt2','mt3']
            // id: mode,
            // tileSize: 512,
            // zoomOffset: -1,
        }
        ).addTo(mymap);
}

function getZonaNew() {

    $.ajax({  
        url: API_ZONA,
        method:"GET",  
        beforeSend:function(){
            getZonaPlan();
        },
        success:function(res)  
        { 
            var data = res.data;
            for (var i = 0; i < data.length; i++) {
                var title = data[i].siteid;
                var kec = data[i].kecamatan;
                var kel = data[i].kelurahan;
                var lat = data[i].latitude;
                var long = data[i].longitude;
                
                mark_new.addLayer(new L.circle([lat,long], 150,{
                    color: '#1360ef',
                    fillColor: 'white',
                    fillOpacity: 0.2
                }).bindPopup(`
                <h6 class="text-center" style="margin:10px"><strong>Site ID : ${title}</strong></h6>
                <hr/>
                <h6 class="text-center text-primary" style="margin:10px">
                <b>Kecamatan : </b>${kec}<br/>
                <b>Kelurahan : </b>${kel}
                </h6>
                `))
                mymap.addLayer(mark_new);
            }
        }  
    }); 
}

function getExistingNew() {
 $.ajax({  
    url: API_TOWER,
    method:"GET",  
    beforeSend:function(){
        getTower();
    },
    success:function(res)  
    { 
        var data = res.data;
        for (var i = 0; i < data.length; i++) {
            var title = "Zona Existing";
            var kec = data[i].kecamatan;
            var kel = data[i].kelurahan;
            var lat = data[i].latitude;
            var long = data[i].longitude;

            mark_exis.addLayer(new L.circle([lat,long], 150,{
                color: '#dc3545',
                fillColor: 'white',
                fillOpacity: 0.2
            }).bindPopup(`
                <h6 style="margin:3px">
                <strong>Site ID : ${data[i].siteid}</strong><br/>
                <strong>Site Name : ${data[i].sitename}</strong><br/>
                </h6>
                <hr/>
                <h6 class="text-center text-primary" style="margin:3px">
                <img src="${API_FOTO_TOWER+data[i].foto}" width="100%">
                <br/><br/>
                <a href="#" onclick="detailTower('${data[i].siteid}')" class="btn bg-purple btn-block text-white">Detail</a>
                </h6>
            `))
            mymap.addLayer(mark_exis);
        }
    }  
});
}

function analisaZona(lat, long)
{
    $.ajax({  
        url: API_ZONA,
        method:"GET",  
        success:function(res)  
        { 
            var data = res.data;
            var arr = [];
            var arr_coor = [];

            for (var i = 0; i < data.length; i++) {
                var kec = data[i].kecamatan;
                var kel = data[i].kelurahan;
                var latitude = data[i].latitude;
                var longitude = data[i].longitude;

                var distance = calCoor(lat, long, latitude, longitude);

                if(distance <= 150){
                    arr.push(1);
                    arr_coor.push({
                        lat_coor : latitude,
                        long_coor : longitude,
                    });
                } else {
                 arr.push(0); 
             }
         }

         let check = arr => arr.includes(1);


         var out;
         if(check(arr)) {   
            var distance_new = calCoor(lat, long, arr_coor[0].lat_coor, arr_coor[0].long_coor); 

            var pointA = new L.LatLng(arr_coor[0].lat_coor, arr_coor[0].long_coor);
            var pointB = new L.LatLng(lat, long);
            var pointList = [pointA, pointB];

            var firstpolyline = new L.Polyline(pointList, {
                color: '#000000',
                weight: 3,
                opacity: 0.5,
                smoothFactor: 1
            });
            mymap.addLayer(firstpolyline);

            out = `<div class='alert alert-success'><small>Koordinat <b>${lat} & ${long}</b> berada didalam zona dengan jarak <b>${distance_new}m</b>.</small></div>`;
        } else {
            out = `<div class='alert alert-danger'><small>Koordinat berada diluar zona.</small></div>`;
        }
        $('#showKeterangan').html(out);
    }  
});
}

function showMarkerAnalisa(lat, long)
{
    analisaZona(lat, long);

    var icon = L.icon({
        iconUrl: 'https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-512.png',
        iconSize: [30, 30],
    });

    mark_analisa.addLayer(new L.marker([lat,long],{
        icon: icon,
    }));

    mymap.addLayer(mark_analisa);
}

function getTowerPerusahaan() {
    $.ajax({
        type:"GET",
        url:API_TOWER_PERUSAHAAN,
        beforeSend:function(){
            $('#tower-perusahaan').html('<center>'+loading+'</center>');
        },
        success:function(res){
            var dt = res.data;
            var count = dt.length;
            var output = '';
            if(count > 0){
                for (var i = 0; i < count; i++) {

                    output += `
                    <div class="form-group mb-4">
                    <div style="float: right;">
                    <span class="badge badge-primary-soft p-2 font-w-7 text-purple">${dt[i].tot_tower}</span>
                    <img src="${API_ICON_PERUSAHAAN+dt[i].icon}" width="20">
                    </div>
                    <div class="form-check">
                    <input class="form-check-input check_perusahaan" onchange="postTowerPerusahaan(${i})" type="checkbox" name="check_perusahaan[]" value="${dt[i].idperusahaan}" id="perusahaan-${i}">
                    <label class="form-check-label" for="perusahaan-${i}">${dt[i].namaperusahaan.substring(0, 20)+'...'}</label>
                    </div>
                    <span id="tot-tower-${i}"></span>
                    </div>`
                }
            } else {
                output += `<div class="alert alert-danger">Data Tidak Ditemukan.</div>`
            }

            $('#tower-perusahaan').html(output);           
        }
    });
}

function postTowerPerusahaan(id)
{

    mymap.removeLayer(mark_tower);
    mark_tower.clearLayers();

    var fd = new FormData();
    
    fd.append('idperusahaan[]',0);
    
    $(`input[name='check_perusahaan[]']:checked`).each(function(){
        fd.append('idperusahaan[]', parseInt($(this).val()));
    });
    
    $.ajax({  
        url: API_TOWER_PERUSAHAAN_FILTER,
        type:"POST",  
        data: fd,
        dataType:'json',
        processData: false,
        contentType: false,
        beforeSend:function(){
            $(`#tot-tower-${id}`).html(spinner);
        },
        success:function(res)  
        { 
            var data = res.data;
            for (var i = 0; i < data.length; i++) {
                var siteid = data[i].siteid;
                var sitename = data[i].sitename;
                var kec = data[i].kecamatan;
                var kel = data[i].kelurahan;
                var lat = data[i].latitude;
                var long = data[i].longitude;
                var icon = "";

                if(data[i].icon == "" || data[i].icon == null){
                    icon = "https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-512.png";
                } else {
                    icon = API_ICON_PERUSAHAAN+data[i].icon;
                }

                var iconMarker = L.icon({
                    iconUrl: icon,
                    iconSize: [20, 30],
                    iconAnchor: [0,0],
                    popupAnchor: [0, 0],
                });

                mark_tower.addLayer(new L.marker([lat,long],{
                    icon : iconMarker,
                }).bindPopup(`
                <h6 style="margin:3px">
                <strong>Site ID : ${siteid}</strong><br/>
                <strong>Site Name : ${sitename}</strong><br/>
                </h6>
                <hr/>
                <h6 class="text-center text-primary" style="margin:3px">
                <img src="${API_FOTO_TOWER+data[i].foto}" width="100%">
                <br/><br/>
                <a href="#" onclick="detailTower('${data[i].siteid}')" class="btn bg-purple btn-block text-white">Detail</a>
                </h6>
                `))
                mymap.addLayer(mark_tower);
            }
        },
        complete:function()
        {
            $(`#tot-tower-${id}`).html('');
        }  
    });
}

function legendMode()
{
    var legend = L.control({ position: "topright" }),
    arrPencarian = [];
    
    legend.onAdd = function (mymap) {
        var div = L.DomUtil.create("div", "Mode Map");
        arrPencarian.push(
            `
            <div class="card shadow">
            <div class="card-body">
            <div class="row">
            <div class="col-md-12">
            <button class="btn btn-light btn-sm" id="street" type="button" onclick="changeMode('street')">
            <i class="las la-street-view"></i>
            </button>
            <button class="btn btn-light btn-sm" id="satellite" type="button" onclick="changeMode('satellite')">
            <i class="las la-layer-group"></i>
            </button>
            </div>
            </div>
            </div>
            </div>
            `
            );

        div.innerHTML = arrPencarian.join("<br>");
        return div;
    };
    legend.addTo(mymap);
}

function changeMode(val)
{
    mymap.remove();
    $('input[type=checkbox]').prop('checked', false);

    if(val == 'street') {
        showMap("http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}");
    } else {
        showMap("http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}");
    }
    legendMode();
}

function detailTower(siteid)
{
    $('#detailTower').modal("show");
    $.ajax({
        type:"GET",
        url:API_TOWER + '?siteid='+siteid,
        beforeSend:function(){
            $('.title-detail').html(spinner);
            $('#detail-tower').html(spinner);
        },
        success:function(res){
           showDetailTower(res);
       }
   });
}

function showDetailTower(res)
{
    var output = "";

    if(res.status == 200) {
        var data = res.data;
        if(data) {
            $('.title-detail').html('<b>Site ID :</b> '+data.siteid);
            output += `
            <div class="row">
            <div class="col-6">
            <img src="${API_FOTO_TOWER+data.foto}" width="100%">
            </div>
            <div class="col-6">
            <table class="table table-bordered" style="font-size: 14px">
            <tr>
            <th>Site Name</th>
            <td>${data.sitename}</td>
            </tr>
            <tr>
            <th>Nama Perusahaan</th>
            <td>${data.namaperusahaan}</td>
            </tr>
            <tr>
            <th>Alamat</th>
            <td>${data.alamat}</td>
            </tr>
            <tr>
            <th>Kelurahan</th>
            <td>${data.kelurahan}</td>
            </tr>
            <tr>
            <th>Kecamatan</th>
            <td>${data.kecamatan}</td>
            </tr>
            <tr>
            <th>Tanggal Bangun</th>
            <td>${formatDate(data.tglbangun)}</td>
            </tr>
            <tr>
            <th>No.IMB</th>
            <td>${data.noimb != null ? data.noimb : "-"}</td>
            </tr>
            <tr>
            <th>Izin Gangguan</th>
            <td>${data.izingangguan != null ? data.izingangguan : "-"}</td>
            </tr>
            <tr>
            <th>Kawasan</th>
            <td>${data.kawasan}</td>
            </tr>
            <tr>
            <th>Tipe</th>
            <td>${data.tipe}</td>
            </tr>
            <tr>
            <th>Tinggi Menara</th>
            <td>${data.tinggimenara} m</td>
            </tr>
            <tr>
            <th>Tinggi Antena</th>
            <td>${data.tinggiantena} m</td>
            </tr>
            <tr>
            <th>Luas Area</th>
            <td>${data.luasarea} m</td>
            </tr>
            <tr>
            <th>Akses Jalan</th>
            <td>${data.aksesjalan}</td>
            </tr>
            <tr>
            <th>Kondisi Sekitar</th>
            <td>${data.kondisisekitar}</td>
            </tr>
            </table>
            </div>
            </div>
            `;
        } else {
           output += '<div class="alert alert-danger">Data Tidak Ditemukan.</div>';
       }
   } else {
    output += '<div class="alert alert-danger">Kesalahan Pengambilan Data.</div>';
}
$('#detail-tower').html(output);
}   
var loading = `<div class="spinner-border spinner-border-sm text-purple" style="width:40px;height: 40px;">
<span class="sr-only">Loading...</span>
</div>`;

var loading_white = `<div class="spinner-border spinner-border-sm text-white" style="width:40px;height: 40px;">
<span class="sr-only">Loading...</span>
</div>`;

var spinner = `<div class="spinner-border spinner-border-sm text-purple" role="status">
<span class="sr-only">Loading...</span>
</div>`;

var HOST = "https://simdaratel.production.pangkalpinangkota.go.id/api/home/";
var API_PEMOHON = HOST+"get-nik-pemohon/";
var API_PENANGGUNG_JAWAB = HOST+"get-nik-penanggungjawab/";
var API_TOWER = HOST+"tower/";
var API_ZONA = HOST+"zona-plan/";
var API_DOKUMEN = HOST+"dokumen/";
var API_PERUSAHAAN = HOST+"perusahaan/";
var API_TOWER_KAWASAN = HOST+"tower-kawasan/";
var API_TOWER_PERUSAHAAN = HOST+"tower-perusahaan/";
var API_TOWER_PERUSAHAAN_FILTER = HOST+"filter-tower";
var API_ICON_PERUSAHAAN = HOST+"icon/";
var API_FOTO_TOWER = HOST+"foto/";
var API_PERMOHONAN = HOST+"permohonan/";

function showAlert(msg){
	swal(msg, {
		icon: "success",
	});
}

function showWarning(msg){
	swal(msg, {
		icon: "warning",
	});
}

function formatDate(dateString)
{
	var allDate = dateString.split(' ');
	var thisDate = allDate[0].split('-');
	var newDate = [thisDate[2],thisDate[1],thisDate[0] ].join("-");
	return newDate;
}

function calCoor(lat1, lon1, lat2, lon2) 
{
      var R = 6371; // km
      var dLat = toRad(lat2-lat1);
      var dLon = toRad(lon2-lon1);
      var lat1 = toRad(lat1);
      var lat2 = toRad(lat2);

      var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
      Math.sin(dLon/2) * Math.sin(dLon/2) * Math.cos(lat1) * Math.cos(lat2); 
      var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
      var d = R * c * 1000;
      return parseInt(d);
    }

    function toRad(Value) 
    {
     return Value * Math.PI / 180;
   }
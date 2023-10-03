$(document).ready(function() {
	getAll();
});

function getAll() {
	getTower();
	getZonaPlan();
	getTowerKawasan();
}
function getTower() {
	$.ajax({
		type:"GET",
		url:API_TOWER,
		beforeSend:function(){
			$('#tot-tower').html(loading_white);
			$('#tot-existing').html(loading);
		},
		success:function(res){
			var tot_tower = res.data.length;
			$('#tot-tower').html(`<span class="count-number display-4" data-to="${tot_tower}" data-speed="5000">${tot_tower}</span>`);			
			$('#tot-existing').html(`<span class="count-number display-4" data-to="${tot_tower}" data-speed="5000">${tot_tower}</span>`);
		}
	});
}

function getZonaPlan() {
	$.ajax({
		type:"GET",
		url:API_ZONA,
		beforeSend:function(){
			$('#tot-zona').html(loading);
		},
		success:function(res){
			var tot_zona = res.data.length;
			$('#tot-zona').html(`<span class="count-number display-4" data-to="${tot_zona}" data-speed="5000">${tot_zona}</span>`);			
		}
	});
}

function getTowerKawasan() {
	$.ajax({
		type:"GET",
		url:API_TOWER_KAWASAN,
		beforeSend:function(){
			$('#tower-kawasan').html('<center>'+loading+'</center>');
		},
		success:function(res){
			var dt = res.data;
			var count = dt.length;
			var output = '';

			for (var i = 0; i < count; i++) {
				(i == count-1) ? col = "mt-md-4" : col = "";

				output += `<div class="col-lg-6 col-md-6 ${col}" data-aos="fade-up">
				<div class="counter bg-white rounded p-5 shadow">
				<div class="counter-desc">
				<h6>${dt[i].kawasan}</h6>
				<span class="count-number display-4 text-purple" data-to="${dt[i].tot_tower}" data-speed="5000">
				${dt[i].tot_tower}
				</span>
				</div>
				</div>
				</div>`
			}

			$('#tower-kawasan').html(output);			
		}
	});
}
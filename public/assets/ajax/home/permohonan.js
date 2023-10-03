$(document).ready(function() {

	getDokumen();

	$(document).on('click', 'li', function(){
		var id = $(this).attr("data-id");
		var nama = $(this).attr("data-nama");
		var alamat = $(this).attr("data-alamat");
		var telp = $(this).attr("data-telp");
		var email = $(this).attr("data-email");

		$("input[name=nm_perusahaan]").val(nama);
		$("input[name=al_perusahaan]").val(alamat);
		$("input[name=hp_perusahaan]").val(telp);
		$("input[name=email_perusahaan]").val(email);
		$("input[name=id_perusahaan]").val(id);
		$('#perusahaanList').fadeOut(); 
	});
});

$("#pertanyaan").change(function() {
	var nik_pemohon = $("input[name=nik_pemohon]").val();
	var nm_pemohon = $("input[name=nm_pemohon]").val();
	var jk_pemohon = $("select[name=jk_pemohon]").val();
	var tl_pemohon = $("input[name=tl_pemohon]").val();
	var tgl_pemohon = $("input[name=tgl_pemohon]").val();
	var al_pemohon = $("input[name=al_pemohon]").val();
	var hp_pemohon = $("input[name=hp_pemohon]").val();
	var email_pemohon = $("input[name=email_pemohon]").val();
	var jab_pemohon = $("input[name=jab_pemohon]").val();

	if($(this).is(':checked')) {
		$("input[name=nik_penanggung_jawab]").val(nik_pemohon);
		$("input[name=nm_penanggung_jawab]").val(nm_pemohon);
		$("select[name=jk_penanggung_jawab]").val(jk_pemohon).change();
		$("input[name=tl_penanggung_jawab]").val(tl_pemohon);
		$("input[name=tgl_penanggung_jawab]").val(tgl_pemohon);
		$("input[name=al_penanggung_jawab]").val(al_pemohon);
		$("input[name=hp_penanggung_jawab]").val(hp_pemohon);
		$("input[name=email_penanggung_jawab]").val(email_pemohon);
		$("input[name=jab_penanggung_jawab]").val(jab_pemohon);
	} else {
		$("input[name=nik_penanggung_jawab]").val('');
		$("input[name=nm_penanggung_jawab]").val('');
		$("input[name=jk_penanggung_jawab]").val('');
		$("input[name=tl_penanggung_jawab]").val('');
		$("input[name=tgl_penanggung_jawab]").val('');
		$("input[name=al_penanggung_jawab]").val('');
		$("input[name=hp_penanggung_jawab]").val('');
		$("input[name=email_penanggung_jawab]").val('');
		$("input[name=jab_penanggung_jawab]").val('');
	}
});


$('input[name=nm_perusahaan]').keyup(function(){  
	var query = $(this).val();  
	if(query != '') {  
		$.ajax({  
			url: API_PERUSAHAAN,
			type:"GET",  
			data:{query:query}, 
			beforeSend:function()
			{
				$('#perusahaanList').html(spinner);
			}, 
			success:function(res)  
			{ 

				var dt = res.data;

				var output = "<ul class='list-perusahaan list-unstyled list-group list-group-flush' id='list-perusahaan'>";
				if(dt.length > 0){
					for (var i = 0; i < dt.length; i++) {
						output += `<li class="li-perusahaan" data-id="${dt[i].idperusahaan}" data-nama="${dt[i].namaperusahaan}" data-alamat="${dt[i].alamat}" data-email="${dt[i].email}" data-telp="${dt[i].telp}">${dt[i].namaperusahaan}</i></li>`;
					}
				} else {
					output += ``;
				}
				output += "</ul>";  
				$('#perusahaanList').html(output);  
				$('#perusahaanList').fadeIn();
			}  
		});  
	}  
});

$('input[name=nik_pemohon]').change(function(){  
	var nik = $(this).val(); 

	$.ajax({  
		url: API_PEMOHON,
		type:"POST",  
		data:{nik:nik}, 
		beforeSend:function()
		{
			$('#load-pemohon').html(loading);
		}, 
		success:function(res)  
		{ 
			var data = res.data;
			if(data){
				$("input[name=nm_pemohon]").val(data.nama);
				$("select[name=jk_pemohon]").val(data.jeniskelamin).change();
				$("input[name=tl_pemohon]").val(data.tempatlahir);
				$("input[name=tgl_pemohon]").val(data.tglahir);
				$("input[name=al_pemohon]").val(data.alamat);
				$("input[name=hp_pemohon]").val(data.nohp);
				$("input[name=email_pemohon]").val(data.email);
				$("input[name=jab_pemohon]").val(data.pekerjaan);
			} else {
				$("input[name=nm_pemohon]").val('');
				$("select[name=jk_pemohon]").val('');
				$("input[name=tl_pemohon]").val('');
				$("input[name=tgl_pemohon]").val('');
				$("input[name=al_pemohon]").val('');
				$("input[name=hp_pemohon]").val('');
				$("input[name=email_pemohon]").val('');
				$("input[name=jab_pemohon]").val('');
			}
		},
		complete:function()
		{
			$('#load-pemohon').text('');
		},   
	}); 
});

$('input[name=nik_penanggung_jawab]').change(function(){  
	var nik = $(this).val();  
	$.ajax({  
		url: API_PENANGGUNG_JAWAB,
		type:"POST",  
		data:{nik:nik}, 
		beforeSend:function()
		{
			$('#load-pj').html(loading);
		}, 
		success:function(res)  
		{ 
			var data = res.data;
			if(data) {
				$("input[name=nm_penanggung_jawab]").val(data.nama);
				$("select[name=jk_penanggung_jawab]").val(data.jeniskelamin).change();
				$("input[name=tl_penanggung_jawab]").val(data.tempatlahir);
				$("input[name=tgl_penanggung_jawab]").val(data.tglahir);
				$("input[name=al_penanggung_jawab]").val(data.alamat);
				$("input[name=hp_penanggung_jawab]").val(data.nohp);
				$("input[name=email_penanggung_jawab]").val(data.email);
				$("input[name=jab_penanggung_jawab]").val(data.pekerjaan);
			} else {
				$("input[name=nik_penanggung_jawab]").val('');
				$("input[name=nm_penanggung_jawab]").val('');
				$("input[name=jk_penanggung_jawab]").val('');
				$("input[name=tl_penanggung_jawab]").val('');
				$("input[name=tgl_penanggung_jawab]").val('');
				$("input[name=al_penanggung_jawab]").val('');
				$("input[name=hp_penanggung_jawab]").val('');
				$("input[name=email_penanggung_jawab]").val('');
				$("input[name=jab_penanggung_jawab]").val('');
			}
		},
		complete:function()
		{
			$('#load-pj').text('');
		},   
	}); 
});

function getDokumen() {
	$.ajax({
		type:"GET",
		url:API_DOKUMEN,
		beforeSend:function(){
			$('#dokumen-list').html('<center>'+loading+'</center>');
		},
		success:function(res){
			var data = res.data;
			var count = data.length;

			var output = '<table class="table table-bordered">';

			for (var i = 0; i < count; i++) {
				output += `<tr>
				<th valign="middle">${i+1}</th>
				<td width="50%" valign="middle">
				<b style="font-size:13px">${data[i].dokumenpersyaratan}</b>
				<br/>
				<input type="hidden" name="namadokumen[${i}]" value="${data[i].dokumenpersyaratan}">
				</td>
				<td width="50%" valign="middle">
				<div class="form-group">
				<span class="text-danger" style="font-size:12px">Format File (.pdf, .jpg, .jpeg, .png) Maksimal File <b>2MB</b>.</span>
				<input type="file" accept=".pdf,.jpg,.jpeg,.png" name="dokumen[${i}]" id="dokumen_${data[i].idpersyaratan}" class="form-control" onchange="getFile(${data[i].idpersyaratan})">
				<div style="margin-top:15px" id="btn-preview-${data[i].idpersyaratan}"></div>
				</div>
				</td>
				</tr>`;
			}
			output += '</table>';
			
			$('#dokumen-list').html(output);
		}
	});
}

$('input[name="jml_dokumen_pendukung"]').on('change',function(e){
	getDokumenPendukung(this.value);
});

function getDokumenPendukung(count_input) 
{
	$.ajax({
		type:"GET",
		url:API_DOKUMEN,
		beforeSend:function(){
			$('#dokumen-pendukung-list').html('<center>'+loading+'</center>');
		},
		success:function(res){
			var data = res.data;
			var count = data.length; 

			var output = '<table class="table table-bordered">';

			for (var i = 0; i < count_input; i++) {
				
				var tot = count + i;

				output += `<tr>
				<th valign="middle">${tot+1}</th>
				<td width="50%" valign="middle">
				<input text="hidden" name="namadokumen[${tot}]" class="form-control" placeholder="Nama Dokumen">
				</td>
				<td width="50%" valign="middle">
				<div class="form-group">
				<span class="text-danger" style="font-size:12px">Format File (.pdf, .jpg, .jpeg, .png) Maksimal File <b>2MB</b>.</span>
				<input type="file" accept=".pdf,.jpg,.jpeg,.png" name="dokumen[${tot}]" id="dokumen_${tot}" class="form-control" onchange="getFile(${tot})">
				<div style="margin-top:15px" id="btn-preview-${tot}"></div>
				</div>
				</td>
				</tr>`;
			}
			output += '</table>';
			
			$('#dokumen-pendukung-list').html(output);
		}
	});
}

function getFile(id)
{
	var filesize = $(`#dokumen_${id}`)[0].files[0].size;
	
	if(Math.round(filesize / (1024 * 1024)) > 2) {
		toastr.info('File anda melebihi 2MB, harap upload kembali.','Informasi',{
			"closeButton": true,
			"progressBar": true,
			"positionClass": "toast-bottom-center",
			"showDuration": "300",
			"hideDuration": "1000",
			"timeOut": "5000",
			"extendedTimeOut": "1000",
			"showEasing": "swing",
			"hideEasing": "linear",
			"showMethod": "fadeIn",
			"hideMethod": "fadeOut"
		});
	} else {
		var file = $(`#dokumen_${id}`)[0].files[0];
		file_url = URL.createObjectURL(file);
		$(`#btn-preview-${id}`).html(`
			<div class="accordion" id="accordion">
			<div class="accordion-item mb-4">
			<h2 class="accordion-header" id="headingTwo">
			<button class="accordion-button border mb-0 bg-purple rounded text-white collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#preview-${id}" aria-expanded="false" aria-controls="preview${id}">
			Preview
			</button>
			</h2>
			<div id="preview-${id}" class="accordion-collapse border-0 collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
			<iframe src="${file_url}" frameborder="0" scrolling="yes" width="100%"></iframe>
			</div>
			</div>
			</div>
			`)
	}
}

$("#formPermohonan").on("submit",function (e)
{
	e.preventDefault();
	var formData = new FormData(this);
	
	$.ajax(
	{
		type:"POST",
		url:API_PERMOHONAN,
		data:formData,
		cache:true,
		contentType: false,
		processData: true,
		beforeSend:function()
		{
			$('#btnPermohonan').html(loading_white);
			$('#btnPermohonan').prop('disabled', true);
		},
		complete:function()
		{
			$('#btnPermohonan').text('Simpan');
			$('#btnPermohonan').prop('disabled', false);
			$('#formPermohonan')[0].reset();
		},
		success:function(res)
		{
			if(res.status == 200){
				toastr.success('Data berhasil disimpan. Harap periksa email anda secara berkala untuk informasi selanjutnya. Terimakasih.','Informasi',{
					"closeButton": true,
					"progressBar": true,
					"positionClass": "toast-top-center",
					"showDuration": "1000",
					"hideDuration": "3000",
					"timeOut": "7000",
					"extendedTimeOut": "3000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				});
				sendEmail(res.email, 'Permohonan Menara Telekomunikasi', 'PERMOHONAN', res.nama, res.kode);
			} else{
				toastr.error('Data gagal disimpan. Harap Coba Kembali.','Informasi',{
					"closeButton": true,
					"progressBar": true,
					"positionClass": "toast-top-center",
					"showDuration": "1000",
					"hideDuration": "3000",
					"timeOut": "7000",
					"extendedTimeOut": "3000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				});
			}
		}
	});
});
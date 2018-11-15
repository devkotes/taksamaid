$("#tgl").flatpickr({
	altInput: true,
    altFormat: "j F Y",
    dateFormat: "Y-m-d",
});

$( "#formRegister" ).validate({
  rules: {
    name: "required",
    email : {
    	required: true,
			email: true
    },
    nik : {
    	required: true,
			digits: true,
			minlength: 16
    },
    birthplace: "required",
    religion: "required",
    address: "required",
    telepon: {
    	required: true,
			digits: true,
			minlength: 11
    },
    SA: "required",
    alamatSA: "required",
    lulusan: "required",
    dep: "required"
  },
  messages: {
    name: "Silakan Masukkan Nama Lengkap Anda",
    email: {
      required: "Kami membutuhkan alamat email Anda untuk menghubungi Anda",
      email: "Alamat email Anda harus dalam format nama@domain.com"
    },
    nik: {
      required: "Silakan Masukkan NIK Anda dengan benar",
      digits: "Nomor Induk Kependudukan Anda harus angka",
      minlength: "Nomor Induk Kependudukan Anda harus 16 Digit"
    },
   	birthplace: "Silakan masukkan Tempat Lahir Anda dengan benar",
   	religion: "Silakan Pilih Agama",
   	address: "Silakan Masukkan Alamat Sesuai KTP",
   	telepon: {
   	  required: "Silakan Masukkan Nomor Telepon Anda dengan benar",
      digits: "Nomor Telepon harus angka",
      minlength: "Nomor Telepon minimal 11 Digit"
   	},
   	SA: "Silakan Masukkan Nama Sekolah Asal Anda dengan benar",
   	alamatSA: "Silakan Masukkan Alamat Sekolah Asal Anda dengan benar",
   	dep: "Silakan Pilih Jurusan",
  },
  submitHandler: function(form){
  	var data = $('#formRegister').serialize();
  	$.ajax({
		type: 'post',
		url: '<?php echo site_url();?>university/addRegister',
		data: data,
		//dataType: 'json',
		success: function(data){
			resetForm();
			swal("Success!", "Silahkan cek email yang sudah didaftarkan untuk proses selanjutnya", "success").then(function(){
				location.reload();
			});
		}
	})
  }
});
function resetForm(){
	$('#formRegister')[0].reset();
}
$("#email").keyup( function(){
    $.ajax({
        url: "/Project1/project/ajax/cekemail",
        data: { "email" : $(this).val() } ,
        method: "POST",
        success: function(result){
                $("#warning_email").html(result);
        }
    });
});

$("#user").keyup( function(){
    $.ajax({
        url: "/Project1/project/ajax/cekuser",
        data: { "namauser" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_user_name").html( "Username sudah terdaftar" );
            } else {
                $("#warning_user_name").html( "Username OK" );
            }
        }
    });
});

function ambilJlhKomentar(){
	$.ajax({
		url: "/Project1/project/ajax/cekjlhnotif",
	    dataType:'json',
	    success: function(response){
			$("#jumlah_notifikasi").text(""+response+"");
			timer = setTimeout("ambilJlhKomentar()",5000);
	    }
	}); 
}

function timeConversion(millisec) {
    var seconds = (millisec / 1000).toFixed(1);
    var minutes = (millisec / (1000 * 60)).toFixed(1);
    var hours = (millisec / (1000 * 60 * 60)).toFixed(1);
    var days = (millisec / (1000 * 60 * 60 * 24)).toFixed(1);

    if (seconds < 60) {
        return seconds + " detik";
    } else if (minutes < 60) {
        return minutes + " menit";
    } else if (hours < 24) {
        return hours + " jam";
    } else {
        return days + " hari"
    }
}

function ambilKomentar(){
	$.ajax({
		url: "/Project1/project/ajax/ceknotif",
	    dataType:'json',
	    success: function(response){
			if(response){
                var len = response.length;
                var txt = "";
				var now = new Date();
                if(len > 0){
                    for(var i=0;i<len;i++){
                        if(response[i].isi_notif && response[i].tgl_notif){
							var diff = Math.abs(new Date() - new Date(response[i].tgl_notif.replace(/-/g,'/')));
							txt += "<li><center><p class='col-mg-10 control-label' > "+response[i].isi_notif+" ( "+timeConversion(diff)+" yang lalu ) </p></center>"
								  +"</li> <li role='separator' class='divider'></li>";
                        }
                    }
                    if(txt != ""){
						$("#isi_notifikasi").empty();
                        $("#isi_notifikasi").append(txt);
                    }
                }
            }
			//$("#notifikasi").text(response);
			//alert(JSON.stringify(response));
			timer = setTimeout("ambilKomentar()",5000);
	    }
	}); 
}

$(document).ready(function(){
	 ambilJlhKomentar();
	 ambilKomentar();
	 $('#myDropdown').on('show.bs.dropdown', function () {
		$.ajax({
			url: "/Project1/project/ajax/readnotif",
			success: function(result){
			}
		});
	});
});


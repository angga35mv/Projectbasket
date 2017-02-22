$("#email").keyup( function(){
    $.ajax({
        url: "/Project1/project/ajax/cekemail",
        data: { "email" : $(this).val() } ,
        method: "POST",
        success: function(result){
            if( result == '1') {
                $("#warning_email").html( "Email sudah pernah terdaftar" );
            } else {
                $("#warning_email").html( "Email OK" );
            }
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


function ingresar_usuario(){

        var formData= new FormData(document.getElementById('form-loginL'));
        //$('#loading-screen').css('display','block');
        $.ajax({
            type: "POST",
            url: "http://localhost:8070/AsistenciaUMG/Verificar/usuario",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
            
        }).done(function(response){                
                var mensaje =JSON.parse(response);
                //$('#loading-screen').css('display','none');  
                   
                if(mensaje=="Usuario o Contraseña incorrecta"){
                    swal({
                        title: 'Atención',
                        text: "Usuario o contraseña incorrecta",
                        icon: 'error'
                    }).then(function () {	        
                            window.location.href='http://localhost:8070/AsistenciaUMG/';					
                    });
                }
                if(mensaje=="Bienvenido"){
                    swal({
                        title: 'Atención',
                        text: mensaje,
                        icon: 'success'
                    }).then(function () {	        
                            window.location.href='http://localhost:8070/AsistenciaUMG/Page/dashboard';					
                    });
                }                   
                                              
        });
        console.log("si pasa");
}
function key_enter(e){
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==13) ingresar_usuario();
}
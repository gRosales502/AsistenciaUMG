function enviar_cliente(){
    var formData= new FormData(document.getElementById('form-cliente'));
        $('#loading-screen').css('display','block');
        $.ajax({
            type: "POST",
            url: "http://localhost:8070/Ferreteria/Insertar/cliente",
            data: formData,
            cache: false,
            contentType: false,
            processData: false
            
        }).done(function(response){
                var mensaje =JSON.parse(response);
                //console.log(mensaje);
                $('#loading-screen').css('display','none');
                swal({
                    icon: 'success',
                    title: 'Atención',
                    text: '¡Se ha registrado correctamente!',
                }).then(function () {	        
                        window.location.href='http://localhost:8070/Ferreteria/Page/cliente';					
                });  
        });
}

function mostrar_msg(id){
    swal({
        title: "¿Está seguro eliminar el dato",
        text: "Esta acción es irreversible",
        icon: "warning",
        buttons: {
            confirm : {text:'Si deseo eliminarlo',className:'sweet-warning'},
            cancel : 'Cancelar'
        },
        dangerMode: true
      })
      .then((willDelete) => {
        if (willDelete) {
            var formData= new FormData();
                    formData.append('id_cliente',id)
                    $.ajax({                            
                            type: "post",
                            url: "http://localhost:8070/Ferreteria/Eliminar/cliente",
                            data: formData,
                            cache: false,
                            contentType: false,
                            processData: false
                    }).done(function(response){
                            //var mensaje = JSON.parse(response);
                            //console.log(mensaje);
                            console.log(response);
                            swal({
                                    icon: 'success',
                                    title: 'Atención',
                                    text: 'Se ha eliminado el dato',
                                    }).then(function () {							
                                    window.location.href='http://localhost:8070/Ferreteria/Page/cliente';        
                                    });                                    
                    });
        } else {
          swal("No se eliminó el dato");
        }
      });
}

function cargar(id){
    var conteo=0;
    $("#cargar"+id).parents("tr").find("td").each(function(){
            
                    if(conteo==0){
                            document.form_clienteA.id_cliente.value=$(this).html();
                    }
                    if(conteo==1){
                           document.form_clienteA.nit.value=$(this).html();
                    }
                    if(conteo==2){
                        document.form_clienteA.nombrecliente.value=$(this).html();
                 }
                 if(conteo==3){
                    document.form_clienteA.telefono.value=$(this).html();
             }
             if(conteo==4){
                document.form_clienteA.direccion.value=$(this).html();
         }


                
            
            conteo++;
    });
}

function actualizar_cliente(){
    var formData= new FormData(document.getElementById('form_clienteA'));

    $.ajax({
        type: "POST",
        url: "http://localhost:8070/Ferreteria/Modificar/cliente",
        data: formData,
        cache: false,
        contentType: false,
        processData: false
        
    }).done(function(response){
        console.log(response);
            swal({
            icon: 'success',
            title: 'Atención',
            text: 'Se ha actualizado correctamente',
            }).then(function () {	
                $('#actualizarCliente').modal("hide");	
                window.location.href='http://localhost:8070/Ferreteria/Page/cliente';					
            });
    });
}

function guardarCambios(){
    swal({
            timer: 10000,
            title: "¿Deseas atender el soporte?",
            text: "",
            type: "info",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#3c8dbc",
            confirmButtonText: "Aceptar",
            closeOnConfirm: false },
            

            function(){
                
               document.editTable.submit();

            });    
}
function finalizar(){
    swal({
            timer: 10000,
            title: "¿Deseas Terminar el soporte?",
            text: "",
            type: "info",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#3c8dbc",
            confirmButtonText: "Aceptar",
            closeOnConfirm: false },
            

            function(){
                
               document.editTable.submit();

            });    
}
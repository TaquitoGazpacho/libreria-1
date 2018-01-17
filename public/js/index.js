window.onload = headerSize;

function headerSize(){
    var header = document.querySelector("body > header");
    header.style.height= window.innerHeight+'px';
}

function handler() {
    console.log("HOla");
}

$( document ).ready(function(){

    $("#continuarCompra").on("submit", function(event){
        event.preventDefault();
        var datosFormulario=$(this).serialize();
        var url="http://localhost/proyectoFinal/checkLogin";
        $.ajax({
           type: "POST",
           url: url,
           success: function(data) {
               if (data !== ""){
                   continuarCompra(data);
               } else {
                   loginLockBox();
               }
           },
           error: function (xhr, ajaxOptions, thrownError) {
               alert(xhr.status);
               alert(xhr.responseText);
          }
        });

    });

    function loginLockBox(){
        var url = "http://localhost/proyectoFinal/getLoginHTML";
        $.ajax({
            type: "POST",
            url: url,
            success: function(data) {
                montarLogin(data);
            },
            // CrossDomain:true,
            error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
                alert(xhr.status);
                alert(xhr.responseText);
            }
        });
    }

    function montarLogin(data) {
        $("#modalHeader").text("Inicio Sesión LockBox");
        $("#continuarCompra").remove();
        $("<div/>",{
            id: 'modalBody',
            class: 'modal-body'
        }).appendTo("#contenidoModal");
        $("<div/>",{
            id: 'modalFooter',
            class: 'modal-footer'
        }).appendTo("#contenidoModal");
        $("<button/>",{
            text: 'Cerrar',
            class: 'btn btn-default'
        }).attr('data-dismiss', 'modal').appendTo("#modalFooter");
        $(data).find("form").appendTo("#modalBody");
        $("body form").attr("action", "http://localhost/proyectoFinal/loginExt");
        submitLogin();
    }

    function submitLogin() {
        $("#loginForm").on("submit", function (event) {
            var url = $(this).attr("action");
            var datosFormulario=$(this).serialize();
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: url,
                data: datosFormulario,
                success: function (data) {
                    if(data !== "FALSE") {
                        continuarCompra(data);
                    } else {
                        alert("Cuenta no verificada, hazlo para continuar");
                    }
                },
                // CrossDomain:true,
                error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
                    alert(xhr.status);
                    alert(xhr.responseText);
                }
            });
        })
    }

    function continuarCompra(usuario){
        $("#modalBody").children().remove();
        $("#modalBody").append("Oficinas!!!")
    }
});





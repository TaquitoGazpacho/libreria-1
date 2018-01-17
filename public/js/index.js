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
                   $(".modal-footer input[type='submit']").remove();
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

    function continuarCompra(datos){
        $("#modalBody").children().remove();
        $("#modalBody").append("OFICINAS");
        $("<form/>", {
            id: "formOficinas",
            action: "#",
            method: "post",
        }).appendTo("#modalBody");
        $("<input/>", {
            name: "selectOficina",
            value: "defecto",
            type: "radio"
        }).appendTo("#formOficinas");
        $("<label/>", {
            text: "Oficina por defecto en LockBox"
        }).appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<input/>", {
            name: "selectOficina",
            value: "nueva",
            type: "radio"
        }).appendTo("#formOficinas");
        $("<label/>", {
            text: "Oficina bueva"
        }).appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<select/>", {
            id: "selectOficinas"
        }).appendTo("#formOficinas");
        var pais="";
        var ciudad="";
        $("<option/>",{
            label: "Selecciona oficina",
            disabled:true,
            selected: true
        }).appendTo("#selectOficinas");
        $(datos.oficinas).each(function(index, el){
            if (pais !== el.pais){
                pais=el.pais;
                $("<optgroup/>",{
                    id: 'opt'+pais.replace(/\s/g, ''),
                    label: pais
                }).appendTo($("#selectOficinas"));
                ciudad=el.ciudad;
                $("<option/>",{
                    id: 'opt'+ciudad.replace(/\s/g, ''),
                    label: ciudad,
                    disabled:true
                }).appendTo($("#opt"+pais.replace(/\s/g, '')));
            } else {
                if (ciudad !== el.ciudad){
                    ciudad = el.ciudad;
                    $("<option/>",{
                        id: 'opt'+ciudad.replace(/\s/g, ''),
                        label: ciudad,
                        disabled: true
                    }).appendTo($("#opt"+pais.replace(/\s/g, '')));
                }
            }
            $("<option/>", {
                value: el.id,
                text: el.calle
            }).appendTo("#opt"+pais.replace(/\s/g, ''));
        });
        $("<br/>").appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<input/>", {
            type: "submit",
            value: "Finalizar Compra",
            class: "btn btn-info"
        }).appendTo("#formOficinas");
        console.log(datos.usuario.name);
        console.log(datos.oficinas[0].calle);
    }
});





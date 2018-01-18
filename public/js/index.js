window.onload = headerSize;

function headerSize(){
    var header = document.querySelector("body > header");
    header.style.height= window.innerHeight+'px';
}

$( document ).ready(function(){
    var url_lockbox="http://localhost/taquitoGazpacho";

    $("#continuarCompra").on("submit", function(event){
        event.preventDefault();
        // var datosFormulario=$(this).serialize();
        var url=url_lockbox+"/checkLogin";
        $.ajax({
           type: "POST",
           url: url,
           success: function(data) {
               console.log(data);
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
        var url = url_lockbox+"/getLoginHTML";
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

    function montarModal() {
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
    }

    function montarLogin(data) {
        $("#modalHeader").text("Inicio Sesión LockBox");
        $("#continuarCompra").remove();
        montarModal();
        $(data).find("form").appendTo("#modalBody");
        $("body form").attr("action", url_lockbox+"/loginExt");
        $("#loginForm").on("submit",  submitLogin(event));
    }

    function submitLogin() {
        var url = $(this).attr("action");
        var datosFormulario=$(this).serialize();
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: url,
            data: datosFormulario,
            success: function (response) {
                if(response !== "FALSE") {
                    continuarCompra(response);
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
    }

    function continuarCompra(datos){
        var idOfi = datos.usuario.oficina_id;
        var nombreOfi = "";
        $("#modalBody").remove();
        $(".modal-footer").remove();
        montarModal();
        $("#modalBody").append("OFICINAS");
        $("<form/>", {
            id: "formOficinas",
            action: url_lockbox+"/crearPedido",
            method: "post"
        }).appendTo("#modalBody");
        $("<input/>", {
            name: "userId",
            value: datos.usuario.id,
            type: "number",
            class: "hidden"
        }).appendTo("#formOficinas");
        $("<input/>", {
            name: "selectOficina",
            value: "defecto",
            type: "radio",
            checked: true
        }).appendTo("#formOficinas");
        $("<label/>", {
            text: "Oficina por defecto en LockBox: ",
            id: "ofiDefectoNombre"
        }).appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<input/>", {
            name: "selectOficina",
            value: "nueva",
            type: "radio"
        }).appendTo("#formOficinas");
        $("<label/>", {
            text: "Oficina nueva"
        }).appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<select/>", {
            id: "selectOficinas",
            name: "oficinaNueva",
            class: "form-control select2"
        }).appendTo("#formOficinas");
        $("<option/>").appendTo("#selectOficinas");
        var pais="";
        var ciudad="";
        $(datos.oficinas).each(function(index, el){
            if (el.id === idOfi){
                $("#ofiDefectoNombre").append(el.calle+", "+el.num_calle);
            }
            if (pais !== el.pais){
                pais=el.pais;
                $("<optgroup/>",{
                    id: 'opt'+pais.replace(/\s/g, ''),
                    label: pais
                }).appendTo($("#selectOficinas"));
                ciudad=el.ciudad;
                $("<option/>",{
                    id: 'opt'+ciudad.replace(/\s/g, ''),
                    text: ciudad,
                    disabled:true,
                    class: "select-ciudad"
                }).appendTo($("#opt"+pais.replace(/\s/g, '')));
            } else {
                if (ciudad !== el.ciudad){
                    ciudad = el.ciudad;
                    $("<option/>",{
                        id: 'opt'+ciudad.replace(/\s/g, ''),
                        text: ciudad,
                        disabled: true,
                        class: "select-ciudad"
                    }).appendTo($("#opt"+pais.replace(/\s/g, '')));
                }
            }
            $("<option/>", {
                value: el.id,
                text: el.calle+", "+el.num_calle,
                class: "select-calle"
            }).appendTo("#opt"+pais.replace(/\s/g, ''));
        });
        $("<br/>").appendTo("#formOficinas");
        $("<br/>").appendTo("#formOficinas");
        $("<input/>", {
            type: "submit",
            value: "Finalizar Compra",
            class: "btn btn-info"
        }).appendTo("#formOficinas");
        $("label").css(
            "font-weight", "normal"
        );

        //Initialize Select2 Elements
        $('.select2').select2({
            placeholder: "Selecciona oficina"
        });

        $("#formOficinas").on("submit", submitOficinas(event));
    }

    function submitOficinas() {

        var url = $(this).attr("action");
        var datosFormulario=$(this).serialize();
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: url,
            data: datosFormulario,
            success: function(response) {
                if (response==="TRUE"){
                    confirmarPedido();
                }
            },
            error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
                alert(xhr.status);
                alert(xhr.responseText);
            }
        });

    }

    function confirmarPedido() {
        $("#modalBody").remove();
        $(".modal-footer").remove();
        montarModal();
        $("<h2/>", {
            text: "Pedido realizado satisfactoriamente",
            class: "text-center"
        }).appendTo("#modalBody");
        $("<a/>", {
            text: "Ir a LockBox",
            class: "btn btn-warning",
            href: url_lockbox+"/perfil/pedidos"
        }).appendTo(".modal-footer");
    }

});





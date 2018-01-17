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
        $.post(url, datosFormulario, function (response) {
            console.log(response);
        });
        // console.log(JSON.stringify(datosFormulario));
        // $.ajax({
        //    type: "POST",
        //    url: url,
        //    data: JSON.stringify(datosFormulario),
        //    success: function(data) {
        //        console.log(data);
        //    },
        //    // dataType: "json",
        //    CrossDomain:true,
        //    // processData: false,
        //    // contentType: 'application/json',
        //    // async: true,
        //    error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
        //        alert(xhr.status);
        //        alert(xhr.responseText);
        //   }
        // });
        // $.ajax({
        //     type: "POST",
        //     url: url,
        //     data: { somefield: "Some field value", _token: '{{csrf_token()}}' },
        //     success: function (data) {
        //         console.log(data);
        //     },
        //     error: function (data, textStatus, errorThrown) {
        //         console.log(data);
        //
        //     },
        // });
    });


    // $.ajax({
    //     url: "http://localhost:8080/auth",
    //     type: "POST",
    //     dataType: 'json',
    //     data: JSON.stringify(data),
    //     processData: false,
    //     contentType: 'application/json',
    //     CrossDomain:true,
    //     async: false,
    //     success: function (data) {
    //         console.log(data);
    //     },
    //     error: function (xhr, ajaxOptions, thrownError) { //Add these parameters to display the required response
    //         alert(xhr.status);
    //         alert(xhr.responseText);
    //     }
    // });

    // function acceso(data) {
    //
    // }
});





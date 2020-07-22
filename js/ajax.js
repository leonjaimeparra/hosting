$(document).ready(function(){

    $("#btnRegistrarInventario").click(function () {

        $.ajax({
            url: "php/insertInventario.php",
            type: "POST",
            dataType: "json",
            success: function(row){
                console.log(row);
            }
        })
    });



});

function mostrarpdf() {

    $("#pdf").show("fast");
    
}
    
function mostrarxml() {
    
    $("#xml").show("fast");
    
}

function uploadfact() {

    var formData = new FormData($("#form")[0]);
    
            $.ajax({

                url: "uploadArchivo.php",
                method: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,

                    success: function (data) {

                        alert(data);
                        $('#form')[0].reset();
                        
                    }

            });

   
            
    
}
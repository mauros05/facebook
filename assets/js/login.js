$(document).ready(function(){
    let obj = {};
    $("#login").click(function(){
        let email = $("#email").val();
        let pass  = $("#pass").val();

        if(email == "" || pass == ""){
            if(email == ""){
                $("#email-error").html("El email no puede estar vacio");
                $("#email-error").removeAttr("hidden");
            } else {
                $("#email-error").html("");
                $("#email-error").attr("hidden", true);
            }


            if(pass == ""){
                $("#pass-error").html("La contraseña no puede estar vacia");
                $("#pass-error").removeAttr("hidden");
            } else {
                $("#pass-error").html("");
                $("#pass-error").attr("hidden", true);
            }
        } else {
            
        }
    })
})
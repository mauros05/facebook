$(document).ready(function(){
    let obj = {};
    $("#login").click(function(){
        let emailOrusername = $("#email-username").val();
        let pass            = $("#pass").val();

        if(emailOrusername == "" || pass == ""){
            if(emailOrusername == ""){
                $("#email-error").html("El email o el nombre de usuario no puede estar vacio");
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
            obj.data = { 
                        emailOrusername: emailOrusername, 
                        password: pass
                    };
            obj.url  = "index.php";
            obj.type = "POST";

            let res = ajaxPetition(obj);

            if(res.flag == 1){
                window.location = "post.php?ac=list";
            } else {
                $("#warning-alert").html(res.error_message);
                $("#warning-alert").removeAttr("hidden");
            }
        }
    })
})
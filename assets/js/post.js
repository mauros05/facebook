$(document).ready(function(){
    let obj = {}
    $("#new-post").click(function(){
        $("#post-form").removeAttr("hidden");
    })

    $("#publish-post").click(function(event){
        event.preventDefault;

        if($("#post-text").val() == ""){
            $("#modal-message").html("La publiciacion debe de tener contenido");
            $("#staticBackdrop").modal("show");
        } else {
            let data = $("#create-post").serialize();
            obj.data = data;
            obj.url  = "post.php";
            obj.type = "POST";
    
            let res = ajaxPetition(obj);

            if(res.flag == 1){
                setTimeout(function(){
                    window.location = "post.php?ac=list";
                }, 3000)
            } else {
                $("#staticBackdrop").modal("show");
            }
        }
    })
    
    $("#edit-post-button").click(function(event){
        event.preventDefault;

        if($("#floatingTextareaEdit").val() == ""){
            $("#modal-message").html("La publiciacion debe de tener contenido");
            $("#staticBackdrop").modal("show");
        } else {
            let data = $("#edit-post").serialize();
            obj.data = data;
            obj.url  = "post.php";
            obj.type = "POST";

            let res = ajaxPetition(obj);

            
        }
    })
})
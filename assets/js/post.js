$(document).ready(function(){
    let obj = {}
    $("#new-post").click(function(){
        $("#post-form").removeAttr("hidden");
    })

    $("#publish-post").click(function(event){
        event.preventDefault;

        if($("#post-text").val() == ""){

        } else {
            let data = $("#create-post").serialize();
            obj.data = data;
            obj.url  = "post.php";
            obj.type = "POST";
    
            let res = ajaxPetition(obj);

            if(res.flag == 1){
                window.location = "post.php?ac=list";
            } else {
                $("#staticBackdrop").modal("show")
            }
        }



    })

})
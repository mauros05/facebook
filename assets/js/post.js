$(document).ready(function(){
    let obj = {}
    $("#new-post").click(function(){
        $("#post-form").removeAttr("hidden");
    })

    $("#publish-post").click(function(event){
        event.preventDefault;

        if($("#post-text").val() == ""){
            $("#modal-message").html("The advertisement must have content");
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
            $("#modal-message").html("The advertisement must have content");
            $("#staticBackdrop").modal("show");
        } else {
            let data = $("#edit-post").serialize();
            obj.data = data;
            obj.url  = "post.php";
            obj.type = "POST";

            let res = ajaxPetition(obj);

            if(res.flag == 1){
                setTimeout(function(){
                    window.location = "post.php?ac=list";
                }, 1500)
            } else {
                $("#staticBackdrop").modal("show");
            }
        }
    })

    $(".delete-post-button").click(function(event){
        event.preventDefault;
        
        let postId = $(this).data("id");
        $("#modal-message").html("Are you sure you want to delete this post?");
        $("#modal-button").html(`<button type='button' class='btn btn-secondary' id='delete-button-final${postId}'>Delete</button>`);
        $("#staticBackdrop").modal("show");
        
        $("#delete-button-final"+postId).click(function(event){
           let postDeleteId =  $("#post-"+postId).val();
           obj.data = { postId: postDeleteId,
                        action: "delete" };
           obj.url = "post.php";
           obj.type = "POST";

           let res = ajaxPetition(obj);

           if(res.flag == 1){
                setTimeout(function(){
                    window.location = "post.php?ac=list";
                }, 1500)
            } else {
                $("#staticBackdrop").modal("show");
            }
        })
    })
    
})
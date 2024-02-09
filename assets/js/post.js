$(document).ready(function(){
    let obj = {}
    $("#new-post").click(function(){
        $("#post-form").removeAttr("hidden");
    })

    $("#publish-post").click(function(){
        let data = $("#create-post").serialize();
        obj.data = data;
        obj.url  = "post.php";
        obj.type = "POST";

        console.log(obj)



    })

})
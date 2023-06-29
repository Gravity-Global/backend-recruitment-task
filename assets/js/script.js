// Add your custom scripts here

$(document).ready(function () {     
    $(".modal-link").on("click", function() {
        $('.modal-overlay').addClass("modal-overlay_visible");
    });
 
    $(".modal__close").on("click", function() {
        $(".modal-overlay").removeClass("modal-overlay_visible");
    });
         
    $(document).on("click", function(e) {
        if(!$(e.target).closest(".modal").length && !$(e.target).closest(".modal-link").length) {
            $(".modal-overlay").removeClass("modal-overlay_visible");
        }
    });
});


function delete_user(id) {
    $.ajax({
        type: "POST",
        url: "/users/delete_user",
        dataType: "json",
        data: {
            "id": id 
        },
        success: function(data){
            if(data.result == "good"){
                $('#message').removeClass('message').html('');
                $("#tr"+id).remove(); 
                $('#message').addClass('message').html(data.html);
                var timer = setTimeout(function(){
                    $('#message').removeClass('message').html('');
                    }, 3000);                   
            }
            else if(data.result == 'error'){
                alert(data.html);
            }
        } 
    }); 
}


// console.log('Good luck 👌');





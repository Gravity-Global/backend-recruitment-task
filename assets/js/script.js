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
                $("#tr"+id).remove(); 
                $('#message').addClass('message_').html(data.html);
                var timer = setTimeout(function(){
                    $('#message').removeClass('message_').html('');
                    }, 3000);                   
            }else if(data.result == 'error'){
                $('#message').addClass('message').html(data.html);
            }
        } ,
    	error: function(response) { 
            $('#result_form').html('Ошибка. ');
    	}
        
    });
}

function sendAjaxForm(result_form, ajax_form, url) {
    $.ajax({
        url:     '/users/add_user', 
        type:     "POST", 
        dataType: "json",
        data: $("#ajax_form").serialize(),
        success: function(response) {
            $('.error').removeClass('error');
            $('.errorMsg').html('');
        	// var response = $.parseJSON(response);
            if(response.result == "validate"){
                // response.data
                for (key in response.data) {
                    $('#'+key).addClass('error').next().html(response.data[key]);
                }
            }else if(response.result == "good"){
                $(".modal-overlay").removeClass("modal-overlay_visible");
                $('#message').addClass('message_').html(response.html);  
                var timer = setTimeout(function(){
                        $('#message').removeClass('message_').html('');
                        location.reload();
                    }, 3000);
                                
                
            }else if(response.result == 'error'){
                $(".modal-overlay").removeClass("modal-overlay_visible");
                $('#message').addClass('message').html(response.html);
            }
    	},
    	error: function(response) { 
            $('#result_form').html('Ошибка. ');
    	}
 	});
}
// console.log('Good luck 👌');





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
                $('#message').addClass('message').html(data.html);
                $("#tr"+id).remove();                
            }
            else if(data.result == 'error'){
                alert(data.html);
            }
        } 
    });
}
console.log('Good luck 👌');


// $.ajax({
//     url: '/users',
//     method: 'get',
//     dataType: 'json',
//     success: function(data){
// 	console.dir(data);
//     },
//     error: function (jqXHR, exception) {
// 	if (jqXHR.status === 0) {
// 		alert('Not connect. Verify Network.');
// 	} else if (jqXHR.status == 404) {
// 		alert('Requested page not found (404).');
// 	} else if (jqXHR.status == 500) {
// 		alert('Internal Server Error (500).');
// 	} else if (exception === 'parsererror') {
// 		alert('Requested JSON parse failed.');
// 	} else if (exception === 'timeout') {
// 		alert('Time out error.');
// 	} else if (exception === 'abort') {
// 		alert('Ajax request aborted.');
// 	} else {
// 		alert('Uncaught Error. ' + jqXHR.responseText);
// 	}
//     }
// });


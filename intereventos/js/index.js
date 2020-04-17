$(document).ready(function() {
  
    $("#get").on('click',function() {
        $.ajax({
            method: "GET",
            url: "forum_model.php/get",
            dataType: "json",
          }).done( (data) => {
            console.log(data);

        }) 
    })
})
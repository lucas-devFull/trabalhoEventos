$(document).ready(function() {
    $("#modal-post").iziModal();
    $("#modal-balada").iziModal();

    $("#newPost").on('click', function() {
        $('#modal-post').iziModal('open');
    })

    $("#new_balada").on('click', function() {
        $('#modal-balada').iziModal('open');
    })

    new_balada
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
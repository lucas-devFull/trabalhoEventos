$(document).ready(function() {
    $("#modal-post").iziModal();
    $("#modal-balada").iziModal();

    $("#newPost").on('click', function() {
        $('#modal-post').iziModal('open');
    })

    $("#new_balada").on('click', function() {
        $('#modal-balada').iziModal('open');
    })

    $(".arquivos_evento").change(function(){
		ImagePreview(this, $(this).attr("data-anexo"));
	});

    function ImagePreview(input, tipo){        
        if (input.files && input.files[0]){
            var r = new FileReader();
            r.onload = function(e){
                if (tipo == "video") {
                    $("#previewMp4").attr("controls", "true")
                    $("#previewMp4").show();
                    $("#previewMp4").attr("src", e.target.result);
                }else{
                    $("#previewImg").show();
                    $("#previewImg").attr("src", e.target.result);
                }
            }
            r.readAsDataURL(input.files[0]);
        }
    }

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
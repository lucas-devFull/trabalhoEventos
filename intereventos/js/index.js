$(document).ready(function() {

    $('#feed_noticias').scroll(function() {
        if(($('#feed_noticias').height() < ($('#feed_noticias').scrollTop())) {
            console.log($('#feed_noticias').scrollTop())
            console.log($('#feed_noticias').height())
        }
    });

    $.ajax({
        method: "GET",
        url: "index_model.php",
        dataType: "json",
      }).done( (data) => {
    })

    $("#modal-post").iziModal();    
    $("#newPost").on('click', function() {
        $('#modal-post').iziModal('open');
    })

    $(".arquivos_evento").change(function(){
        $(".anexo_modal").html();
		ImagePreview(this, $(this).attr("data-anexo"));
	});

    function ImagePreview(input, tipo){        
        if (input.files && input.files[0]){
            var r = new FileReader();
            r.onload = function(e){
                if (tipo == "video") {
                    $(".arquivos_evento[data-anexo='imagem']").val("")
                    $(".anexo_modal").html('<video id="previewMp4" class="anexos" controls autoplay></video>')
                    $("#previewMp4").show();
                    $("#previewMp4").attr("src", e.target.result);
                }else{
                    $(".arquivos_evento[data-anexo='video']").val("")
                    $(".anexo_modal").html('<img id="previewImg" class="anexos">')
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
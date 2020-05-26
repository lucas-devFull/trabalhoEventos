var imagem = []
$(document).ready(function() {
    $.ajax({
        method: "POST",
        url: "index_model.php",
        data:{acao:"select"},
        dataType: "json",
      }).done( (data) => {
          if(data.status) {      
            for (const i in data.dados) {
                var dataFormatada = transformaData(data.dados[i].data_post)
                $('#feed_noticias').prepend(`
                    <div class="col-9">
                      <div class="w-100">
                        <div class="row">
                          <div class="col-md-6 col-imagem">
                          <div class="data_evento"> 
                            <div class="mt-2"> ${dataFormatada.mes} </div>
                            <div> ${dataFormatada.dia} </div>
                          </div>
                            <img style="width:100%;" src="${(data.dados[i].midia != null && data.dados[i].midia != "" && data.dados[i].midia != undefined)? "data:image/png;base64,"+data.dados[i].midia : "imagem/imagem_default.gif"}" alt="Card image cap">
                          </div>
                          <div class="card-body card_texto  col-md-6">
                            <h5 class="card-title text-center" style="color:white;font-size: 200%;">${data.dados[i].titulo_post}</h5>
                            <p class="card-text text-center texto_central "style="color:white;" > ${data.dados[i].descricao_post}</p>
                            <p class="card-text text-center endereco-page" style="font-size:95%;">
                              <small class="text-muted"><span>Endereco: </span> ${data.dados[i].endereco_post} </small>
                            </p>
                            <p class="text-right">
                              <small><a href="forum.php?id=${data.dados[i].id_post}"> Pergunte ao Forúm -></a></small>
                            </p>
                          </div>
                        </div>
                      </div>

                      <div class="social-buttons">
                        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
                          <a class="hi-icon" href="${(data.dados[i].link_fb !== "" && data.dados[i].link_fb !== undefined)?data.dados[i].link_fb:"https://www.facebook.com"}" target="_blank"><i class="fab fa-facebook-square"></i></a>
                          <a class="hi-icon" href="${(data.dados[i].link_twitter !== "" && data.dados[i].link_twitter !== undefined)?data.dados[i].link_twitter:"https://twitter.com/"}" target="_blank"><i class="fab fa-twitter"></i></a>
                          <a class="hi-icon" href="${(data.dados[i].link_instagram !== "" && data.dados[i].link_instagram !== undefined)?data.dados[i].link_instagram:"https://instagram.com/"}" target="_blank"><i class="fab fa-instagram"></i></a>
                          <a class="hi-icon" data-action="share/whatsapp/share" href="${(data.dados[i].link_wpp !== "" && data.dados[i].link_wpp !== undefined)?data.dados[i].link_wpp:"whatsapp://send?text=InterEventos - Fale Conosco (14) 996978485"}"><i class="fab fa-whatsapp"></i></a>
                        </div>
                      </div>
                    </div>
                `)
            }
          }      
    })      

    $('#feed_noticias').scroll(function() {
        var posicaoScroll  = document.getElementById("feed_noticias").offsetHeight +  document.getElementById("feed_noticias").scrollTop + 1;
        var tamanhoScroll = document.getElementById("feed_noticias").scrollHeight;        
        if(posicaoScroll >= tamanhoScroll){
            $.ajax({
                method: "GET",
                url: "index_model.php",
                dataType: "json",
              }).done( (data) => {
            })      
            
        }
    });

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
                    imagem = $(".arquivos_evento[data-anexo='imagem']")[0].files[0]
                    $(".arquivos_evento[data-anexo='video']").val("")
                    $(".anexo_modal").html('<img id="previewImg" class="anexos">')
                    $("#previewImg").show();
                    $("#previewImg").attr("src", e.target.result);
                }
            }
            r.readAsDataURL(input.files[0]);
        }
    }
    

    $("#novo_post").on('click', function() {
        console.log(imagem);
        var dadosForm = new FormData();
        dadosForm.append("file",imagem)
        dadosForm.append("acao", "insert")
        dadosForm.append('titulo', $("#titulo_evento").val())
        dadosForm.append('descricao', $("#textoPrincipal").val())
        dadosForm.append('endereco', $("#endereco_evento").val())
        dadosForm.append('data', $("#data_evento").val())
        dadosForm.append('link_fb', $("#link_fb").val())
        dadosForm.append('link_insta', $("#link_instagram").val())
        dadosForm.append('link_tt', $("#link_twitter").val())
        dadosForm.append('link_wpp', $("#link_wpp").val())
        $.ajax({
            method: "POST",
            url: "index_model.php",
            dataType: 'script',
            cache: false,
            contentType: false,
            processData: false,
            data: dadosForm,
            type: 'post',
          }).done( (data) => {
            if (JSON.parse(data).status == true) {
                $("input").val("")
                iziToast.success({
                    title: 'OK',
					message: 'Postagem Cadastrada com Sucesso !!',
                    timeout: 2000,
                    onClosing: function() {
                        location.reload();
                    }
                });
            }else{
                iziToast.warning({
                    title: 'Atenção',
                    message: 'Erro ao realizar Post',
                    timeout: 2000,
                    onClosing: function() {
                        location.reload();
                    }
                });          
            }
        })
            // console.log(data);
    })

    function transformaData(stringData) {
        var data = stringData.split("-")
        var mesDoAno = {
          '01':'Jan',
          '02':'Fev',
          '03':'Mar',
          '04':'Abr',
          '05':'Mai',
          '06':'Jun',
          '07':'Jul',
          '08':'Ago',
          '09':'Set',
          '10':'Out',
          '11':'Nov',
          '12':'Dez',
        }
        return {"mes":mesDoAno[data[1]], "dia":data[2]}
      }
})
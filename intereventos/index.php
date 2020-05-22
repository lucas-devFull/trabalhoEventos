<?php include_once("header.php"); ?>
<div class="container">
  <div class="row mb-5" id="feed_noticias" style="display:flex; justify-content:center;margin-top:2%;overflow: auto;height: 40em;">
  <?php 
  if (isset($_SESSION['logged_in']) && $_SESSION['admin'] == 1) { ?>

    <div id="newPost"> <i class="newPost far fa-plus-square"></i> </div>
  <?php } ?>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php?id=1"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/testePAgeIinicial.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php?id=1"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/testePAgeIinicial.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php?id=1"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/testePAgeIinicial.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php?id=1"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/testePAgeIinicial.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
    
    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>

    <div class="col-9">
      <div class="w-100">
        <div class="row">
          <div class="col-md-6 col-imagem">
          <div class="data_evento"> 
            <div class="mt-2"> Teste </div>
            <div> 13 </div>
          </div>
            <img style="width:100%;" src="imagem/galala.jpg" alt="Card image cap">
          </div>
          <div class="card-body card_texto  col-md-6">
            <h5 class="card-title text-center" style="color:white;font-size: 200%;">Festa do Sertanejo</h5>
            <p class="card-text text-center texto_central "style="color:white;" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem odio necessitatibus quo ratione magnam alias expedita, nisi incidunt dolorem laborum ad vero illo laboriosam molestias, enim consectetur, quidem hic voluptate!</p>
            <p class="card-text text-center endereco-page" style="font-size:95%;">
              <small class="text-muted"><span>Endereco: </span> Rua: josé rodrigo da silva n:45, jardim aeroport</small>
            </p>
            <p class="text-right">
              <small><a href="forum.php"> Pergunte ao Forúm -></a></small>
            </p>
          </div>
        </div>
      </div>

      <div class="social-buttons">
        <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a" style="">
          <a class="hi-icon" href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a class="hi-icon" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
          <a class="hi-icon" href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a class="hi-icon" data-action="share/whatsapp/share" href="whatsapp://send?text=InterEventos"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="modal-post" aria-hidden="true" class="iziModal" style="z-index: 999; border-radius: 3px; max-width: 600px; display: none; height: 448px;">
  <div class="iziModal-wrap" style="height: auto;">
    <div class="iziModal-content" style="padding: 0px;">
      <div class="icon-close">
        <a href="javascript:void(0)" class="iziModal-button iziModal-button-close" data-izimodal-close=""></a>
      </div>
     
    <div style="padding:5%"> 
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="titulo_evento" aria-describedby="Titulo" placeholder="Titulo">
        </div>
        <div class="form-group">
          <div style="display: flex;justify-content: center;">
            <span class="file_eventos" style="right: 5em;"><i class="fas fa-camera"></i></span>
            <input type="file" class="arquivos_evento" data-anexo="imagem" style="right: 5em;" multiple="true">
            <span class="file_eventos" style="right: 2em;"><i class="fas fa-video"></i></span>
            <input type="file" class="arquivos_evento" data-anexo="video" style="right: 2em;" multiple="true">
          </div>
          <div class="card" id="informacao_evento" style="width: 100%;">
            <div class="anexo_modal">    
            </div>
            <div class="card-body">
              <p class="card-text">
                <textarea type="text" class="form-control textArea-modal"  rols='6' placeholder="Texto principal"></textarea>
              </p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="endereco_evento" aria-describedby="endereço" placeholder="Endereço">
        </div>
        <div class="form-group">
          <input type="date" class="form-control" id="data_evento">
        </div>
        <div class="form-group">
          <div class="row">
              <div class="col-md-3"><input type="text" class="form-control" id="link_fb" placeholder=' link facebook'> </div>
              <div class="col-md-3"><input type="text" class="form-control" id="link_instagram" placeholder=' link instagram'> </div>
              <div class="col-md-3"><input type="text" class="form-control" id="link_twitter" placeholder=' link twitter'> </div>
              <div class="col-md-3"><input type="text" class="form-control" id="link_wpp" placeholder=' link whatsapp'> </div>
          </div>
        </div>
        <div style="text-align:end;">
          <button type="submit" class="btn btn-primary">Postar</button>
        </div>
      </form>
     </div>
    </div>
  </div>
</div>

<?php require "footer.php" ?>
<script src="js/index.js"></script>
</body>
</html>

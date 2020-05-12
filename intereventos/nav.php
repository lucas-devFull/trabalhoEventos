<nav role="navigation">
  <ul id="main-menu" class="sm sm-clean">
    <li><a href="index.php">Home</a></li>
    <li><a href="#">Baladas</a>
      <ul>
        <li><div class="dropdown-item" id="new_balada">Adicionar Nova Balada</div></li>
        <li><a href="http://www.smartmenus.org/about/themes/">Demos + themes</a></li>
        <li><a href="http://vadikom.com/about/#vasil-dinkov">The author</a></li>
        <li><a href="http://www.smartmenus.org/about/vadikom/">The company</a>
          <ul>
            <li><a href="http://vadikom.com/about/">About Vadikom</a></li>
            <li><a href="http://vadikom.com/projects/">Projects</a></li>
            <li><a href="http://vadikom.com/services/">Services</a></li>
            <li><a href="http://www.smartmenus.org/about/vadikom/privacy-policy/">Privacy policy</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="forum.php">Fórum</a></li>
    <li> <a href="servicos.php"> Serviços / Depoimentos </a></li>
    <li><a class="nav-link" href="login.php"> Login <span class="sr-only">(current)</span></a></li>
  </ul>
</nav>

<div id="modal-balada" aria-hidden="true" class="iziModal" style="z-index: 999; border-radius: 3px; max-width: 600px; display: none; height: 448px;">
  <div class="iziModal-wrap" style="height: auto;">
    <div class="iziModal-content" style="padding: 0px;">
      <div class="icon-close">
        <a href="javascript:void(0)" class="iziModal-button iziModal-button-close" data-izimodal-close=""></a>
      </div>
     
    <div style="padding:5%"> 
      <form>
        <div class="form-group">
          <input type="text" class="form-control" id="nome_balada" aria-describedby="Nome da balada" placeholder="Nome da balada">
        </div>
        <div class="form-group">
          <select class="form-control" id="tipo_balada">
            <option value="0">Nenhuma das Opções </option>
            <option value="1"> Sertanejo </option>
            <option value="2"> Eletrônica </option>
            <option value="3"> MPB </option>
            <option value="4"> Rock </option>
          </select>
        </div>
        <div style="text-align:end;">
          <button type="submit" class="btn btn-primary">Nova Balada</button>
        </div>
      </form>
     </div>
    </div>
  </div>
</div>
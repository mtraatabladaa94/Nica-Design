<ul id="slide-out" class="side-nav">
  <li>
    <div class="userView">
      <img class="background" src="img/Background/12928301_10153693639495326_2341979282073055357_n.jpg">
      <br />
      <a href="Signin.php" class="btn deep-orange darken-1">
        Entrar
      </a>
      <br />
    </div>
  </li>
  <li>
    <a class="subheader">Administrar</a>
  </li>
  <li>
    <a class="waves-effect" href="Sala.php">
      <i class="material-icons green-text text-darken-1">library_books</i>
      Salas
    </a>
  </li>
</ul>


<div class="navbar-fixed menu">
  <div class="green  darken-1">
    <div class="container" style="line-height:40px;padding-top:15px;padding-bottom:15px;">
      <a href="#" data-activates="slide-out" class="button-collapse white-text left btn-floating btn-flat">
        <i class="material-icons">menu</i>
      </a>
      <a href="Index.php" data-activates="slide-out" class="white-text" style="font-size:1.5rem;">
          +Nica Dev
      </a>
      <div class="right">
        <a href="Signin.php" class=" waves-effect waves-light btn deep-orange">
          Entrar
        </a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
      $(".button-collapse").sideNav();
    });
</script>
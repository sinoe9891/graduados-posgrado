
<!doctype html>
<html class="no-js" lang="en">
  <?php require_once('includes/session.php'); 
      if (isset($_SESSION)) {
        if (isset($_SESSION['perfiles_user'])) {
          header('Location: index.php');
          die();

        }
      }
  ?>
  <?php require_once('includes/header.php'); ?>

  <style>
  .body{
    display: inline-block;
    text-align: center;
    width: 60%;
    vertical-align: middle;
  }
  .container{text-align: center;}

  .material-icons.orange600{color: #e8ac35}

  @media only screen and (max-width: 800px) {
    .body{
      display: inline-block;
      text-align: center;
      width: 100%;
      vertical-align: middle;
    }
    .container{text-align: center;}
    }
    </style>
  

<body>
  <?php require_once('includes/nav.php'); ?>   
  <main class="container">
    <div>
    <div class="row">
    
      <div class="col s12 m12 l12"> <h4 align="center">Perfiles de Graduados</h4> </div>
    </div>
    <div id="login-page" class="row body">
    <div class="col s12 z-depth-4 card-panel">
      <form class="login-form" action="includes/login.php" method="POST">
        <div class="row">
          <div class="input-field col s12 center">
            <i class="large material-icons orange600">verified_user</i>
            <h5 class="center login-form-text">Iniciar Sesión</h5>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="user" id="username" type="text" placeholder="Nombre de Usuario">  
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Contraseña">
          </div>
        </div>
        
            <div class="row">
                <div class="input-field col s12">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Acceder
              <i class="material-icons right">check</i>
            </button>
              </div>
        </div>

      </form>
    </div>
  </div>
      </div>
               
  </main>
    <?php require_once('includes/footer.php'); ?>



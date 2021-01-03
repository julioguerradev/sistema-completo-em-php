<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://kit.fontawesome.com/1a3b03a1db.js" crossorigin="anonymous"></script>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <title>Nota 10!</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-info bg-info">
    <a class="navbar-brand" href="#"><i class="fas fa-hospital fa-2x"></i></a>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Clínicas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?page=clinica-cadastrar">Cadastrar</a>
            <a class="dropdown-item" href="?page=clinica-consultar">Consultar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Médicos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?page=medico-cadastrar">Cadastrar</a>
            <a class="dropdown-item" href="?page=medico-consultar">Consultar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Pacientes
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?page=cliente-cadastrar">Cadastrar</a>
            <a class="dropdown-item" href="?page=cliente-consultar">Consultar</a>
          </div>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cirurgias
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?page=cirurgia-cadastrar">Cadastrar</a>
            <a class="dropdown-item" href="?page=cirurgia-consultar">Consultar</a>
          </div>
        </li>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <!------------------------Inicio container------------------------>
    <div class="row">
      <div class="col-lg-12 mt-5">
        <?php

        include("config.php");

        switch (@$_REQUEST['page']) {
            //Clinica
          case 'clinica-cadastrar': //------------------------Início Clinia------------------------
            include("clinica-cadastrar.php");
            break;
          case 'clinica-consultar':
            include("clinica-consultar.php");
            break;

          case 'clinica-editar':
            include("clinica-editar.php");
            break;

          case 'clinica-salvar':
            include("clinica-salvar.php");
            break; //------------------------Fim Clinia------------------------
            //medico
          case 'medico-cadastrar': //------------------------Início medico------------------------
            include("medico-cadastrar.php");
            break;
          case 'medico-consultar':
            include("medico-consultar.php");
            break;

          case 'medico-editar':
            include("medico-editar.php");
            break;

          case 'medico-salvar':
            include("medico-salvar.php");

          case 'medico-perfil':
            include("medico-perfil.php");
            break; //------------------------Fim Clinia------------------------
            //cliente
          case 'cliente-cadastrar': //------------------------Início cliente------------------------
            include("cliente-cadastrar.php");
            break;
          case 'cliente-consultar':
            include("cliente-consultar.php");
            break;

          case 'cliente-editar':
            include("cliente-editar.php");
            break;

          case 'cliente-salvar':
            include("cliente-salvar.php");
            break; //------------------------Fim cliente------------------------
            //cirurgia
          case 'cirurgia-cadastrar': //-----------------------Início cirurgia------------------------
            include("cirurgia-cadastrar.php");
            break;
          case 'cirurgia-consultar':
            include("cirurgia-consultar.php");
            break;

          case 'cirurgia-editar':
            include("cirurgia-editar.php");
            break;

          case 'cirurgia-salvar':
            include("cirurgia-salvar.php");
            break; //------------------------Fim cirurgia------------------------

          default:
            include("main.php");
            break;
        }
        ?>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.5.1.slim.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>


</body>

</html>
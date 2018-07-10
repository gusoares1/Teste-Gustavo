
<!DOCTYPE html>
<html lang="pt-br">
    <?php require_once "../../class/ConDB.class.php"; ?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="pagina administrativa">
    <meta name="author" content="Gustavo">
    <link rel="icon" href="cdn/imagens/favicon.ico">
    <script type="text/javascript" src="cdn/js/medico.js"></script>
    <script src="../../cdn/js/jquery-3.1.1.min.js"></script>
    <script src="../../cdn/js/bootstrap-select.min.js"></script>
    <link href="cdn/style.css" rel="stylesheet">
    <script type="text/javascript" src="cdn/js/script.js"></script>
    <link rel="stylesheet" href="../../cdn/css/bootstrap-select.min.css">

    <title>Theme Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../../cdn/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="../../cdn/css/bootstrap-theme.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../cdn/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../cdn/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../cdn/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
        <div class="jmodal modal">
           
                <a class="jmodalfechar modal-fechar" href="">X</a>
                    <div>
                        <p class="modal-txt">
                            <label for="medico">Nome Doutor</label>
                            <div class="modal-input">
                                <input class="modal-input" name="medico" id="medico" type="text" class="form-control">
                            </div> 
                    </div><br> 
                    <button id="medico" class="modal-salvar" onclick="fctlogin()" title="cadastrar" value="cadastrar">Cadastrar</button>
                    <span id="mensagem" class="mensagem"></span>
        </div>       
        <hr />

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Clinica Estagio</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand" href="../../">Clinica Estagio</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paginas <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../../page/agenda/">Agendamentos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="../../page/medico/">Medicos</a></li>
                <li><a href="../../page/paciente/">Paciente</a></li>
                <li><a href="../../page/usuario/">Usuarios</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
    
    <div class="container theme-showcase" role="main">
        
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <h1>Usuarios</h1>
          <p>da clinca</p>
        </div>
        
        <div id="dvBase" >    
            <div class="links">
                <button id="medico" class="jmodalabrir link-tu-cadastrar" href="" type="submit" title="Abrir" value="cadastrar">Cadastrar Usuario</button>
            </div>
        </div><br>
        
        <div class="page-header">
          <h1>Tables</h1>
        </div>
        <div class="row">
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nome</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $Medico = new Crud;
                    
                $sel = $Medico->select('*','usuario','',array());    
                foreach ($sel as $medico){
                    $id = $medico['id'];
                    $nome = $medico['nome'];
//                       $a = implode ('',$nome ); ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $nome;?></td>
                    </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
      </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../cdn/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../cdn/js/jquery.min.js"><\/script>')</script>
    <script src="../../cdn/js/bootstrap.min.js"></script>
    <script src="../../cdn/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../cdn/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

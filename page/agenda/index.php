
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
    <script type="text/javascript" src="cdn/js/agenda.js"></script>
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

   
    <script src="../../cdn/js/ie-emulation-modes-warning.js"></script>

    
    
    <link href="../../cdn/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../cdn/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

  </head>

  <body>
        <div class="jmodal modal">
           
                <a class="jmodalfechar modal-fechar" href="">X</a>
  <div>
                        <form class='form-horizontal'>
                            <div class='form-group'>
                                <label for="medico">Nome medico    :</label>
                                <select id="medico" class="selectpicker">
                                    <?php 
                                    $crud = new Crud;
                    
                                    $sel = $crud->select('*','medico','',array());
                                    foreach ($sel as $medico){
                                        $id = $medico['id'];
                                        $nome = $medico['nome'];?>
                                    
                                        <option value="<?php echo $id ;?>"><?php echo $nome ;?></option>
                                   
                                    <?php } ?>                                   
                                    
                                </select>
                            </div>
                                    
                            <div class='form-group'>
                                <label for="paciente">Nome Usuario</label>
                                <select id="paciente" class="selectpicker">
                                    <?php 
                                    $crud = new Crud;
                    
                                    $sel = $crud->select('*','usuario','',array());
                                    foreach ($sel as $medico){
                                        $id = $medico['id'];
                                        $nome = $medico['nome'];?>
                                    
                                        <option value="<?php echo $id ;?>"><?php echo $nome ;?></option>
                                   
                                    <?php } ?>                                   
                                    
                                </select>
                            </div>
                            
                            <div class='form-group'>
                                <label for="usuario">Nome Paciente</label>
                                <select id="usuario" class="selectpicker">
                                    <?php 
                                    $crud = new Crud;
                    
                                    $sel = $crud->select('*','cliente','',array());
                                    foreach ($sel as $medico){
                                        $id = $medico['id'];
                                        $nome = $medico['nome'];?>
                                    
                                        <option value="<?php echo $id ;?>"><?php echo $nome ;?></option>
                                   
                                    <?php } ?>                                   
                                    
                                </select>
                            </div>
                        </form>
                    </div><br>
                    
                <div class="form-group">
                    <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                    <div class="input-group date form_datetime" data-date="2012-12-21T15:25:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                        <input id="data" name="data" class="form-control" size="16" type="text" value="" readonly>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                    </div>
                    
                </div>
                    
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
          <h1>Agendamentos</h1>
          <p>da clínica</p>
        </div>
        
        <div id="dvBase" >    
            <div class="links">
                <button id="medico" class="jmodalabrir link-tu-cadastrar" href="" type="submit" title="Abrir" value="cadastrar">Cadastrar Medico</button>
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
                  <th>Nome do Medico</th>
                  <th>Nome do Paciente</th>
                  <th>Nome do Usuario</th>
                  <th>Data/Hora</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $Medico = new Crud;
                    
                $sel = $Medico->select('
                        a.id,
                        m.nome medico, 
                        c.nome cliente,
                        u.nome usuario,
                        a.data',
                        'agenda a,medico m,usuario u,cliente c ',
                        'where a.id_medico = m.id
                        and a.id_cliente = c.id 
                        and a.id_usuario = u.id',
                        array());  
                
                foreach ($sel as $dados){
                    
                    $id = $dados['id'];
                    $medicos = $dados['medico'];
                    $data = $dados['data'];
                    $cliente = $dados['cliente'];
                    $usuario = $dados['usuario'];
                        ?>
                    <tr>
                        <td><?php echo $id;?></td>
                        <td><?php echo $medicos;?></td>
                        <td><?php echo $cliente;?></td>
                        <td><?php echo $usuario;?></td>
                        <td><?php echo $data;?></td>
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
    
    <script type="text/javascript" src="../../cdn/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../cdn/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../cdn/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="../../cdn/js//bootstrap-datetimepicker.pt-BR.js" charset="UTF-8"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../cdn/js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        format: "dd MM yyyy - hh:ii",
        language:  'pt-BR',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1,
        linkFormat: "yyyy-mm-dd hh:ii"
    });
    </SCRIPT>
  </body>
</html>

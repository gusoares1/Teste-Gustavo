
<!DOCTYPE html>
<html>
<head>
    <title></title>
    
    <link href="cdn/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="cdn/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
</head>

<body>
<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <legend>Test</legend>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">DateTime Picking</label>
                <div class="input-group date form_datetime col-md-5" data-date="1979-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
			<div class="form-group">
                <label for="dtp_input2" class="col-md-2 control-label">Date Picking</label>
                <div class="input-group date form_date col-md-5" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
				<input type="hidden" id="dtp_input2" value="" /><br/>
            </div>
			<div class="form-group">
                <label for="dtp_input3" class="col-md-2 control-label">Time Picking</label>
                <div class="input-group date form_time col-md-5" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                    <input class="form-control" size="16" type="text" value="" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-time"></span></span>
                </div>
				<input type="hidden" id="dtp_input3" value="" /><br/>
            </div>
        </fieldset>
    </form>
</div>

    <script type="text/javascript" src="cdn/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="cdn/js/bootstrap.min.js"></script>
<script type="text/javascript" src="cdn/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="cdn/js//bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>

</body>
</html>







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
    
    <script type="text/javascript" src="cdn/js/script.js"></script>
    
    <!-- tema -->
    <link rel="stylesheet" href="../../cdn/css/bootstrap-select.min.css">
    <link href="cdn/style.css" rel="stylesheet">
    
    <title>Theme Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="../../cdn/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap theme -->
    <link href="../../cdn/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="../../cdn/css/bootstrap-theme.css" rel="stylesheet">
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../cdn/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../cdn/css/theme.css" rel="stylesheet">
    
    <script src="../../cdn/js/ie-emulation-modes-warning.js"></script>

    
    <!-- date  CSS -->
    <link href="../../cdn/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../../cdn/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
    
  </head>

  <body>
        <div class="jmodal modal">
           
                <a class="jmodalfechar modal-fechar" href="">X</a>
                    <div>
                        <form class='form-horizontal'>
                            <div class='form-group'>
                                <label for="nome">Nome Doutor    :</label>
                                <select class="selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                                    
                            <div class='form-group'>
                                <label for="nome">Nome Paciente</label>
                                <select class="selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                            
                            <div class='form-group'>
                                <label for="nome">Nome Usuario</label>
                                <select class="selectpicker">
                                    <option>Mustard</option>
                                    <option>Ketchup</option>
                                    <option>Relish</option>
                                </select>
                            </div>
                        </form>
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
                  <li><a href="page/agenda/">Agendamentos</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="page/medico/">Medicos</a></li>
                <li><a href="page/paciente/">Paciente</a></li>
                <li><a href="page/usuario/">Usuarios</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        language:  'pt-BR',
        weekStart: 1,
        todayBtn:  1,
                autoclose: 1,
                todayHighlight: 1,
                startView: 2,
                forceParse: 0,
        showMeridian: 1
    });
</script> 
    
    <div class="container theme-showcase" role="main">
        
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="jumbotron">
          <h1>Agendamentos</h1>
          <p>da clinca</p>
        </div>
        
        <div id="dvBase" >    
            <div class="links">
                <button id="medico" class="jmodalabrir link-tu-cadastrar" href="" type="submit" title="Abrir" value="cadastrar">Marcar Agendamento</button>
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
                    
                $sel = $Medico->select('*','medico','',array());    
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
      
    <!-- date  JS-->
    <script src="../../cdn/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script src="../../cdn/js/bootstrap-datetimepicker.pt-BR.js" charset="UTF-8"></script>
    <script src="../../cdn/js/jquery-1.8.3.min.js"  charset="UTF-8"></script>
    <script src="../../cdn/js/bootstrap.min.js"></script>
    <script src="../../cdn/js/bootstrap.js"></script>
    
    <script src="../../cdn/js/docs.min.js"></script>
    
    <script src="../../cdn/js/Gruntfile.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../cdn/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

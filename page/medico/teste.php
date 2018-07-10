<html>
<?php 
require_once "../../class/ConDB.class.php";
require_once '../../header.php'; ?>
     <script type="text/javascript" src="cdn/js/medico.js"></script>
    <body>
        
        <!--janela modal cadastro-->
        
        <div class="jmodal modal">
           
                <a class="jmodalfechar modal-fechar" href="">X</a>
                    <div>
                        <p class="modal-txt">
                            <label for="nome">Nome Doutor</label>
                            <div class="modal-input">
                                <input class="modal-input" name="nome" id="nome" type="text" class="form-control">
                            </div> 
                    </div><br> 
                    <button id="medico" class="modal-salvar" onclick="fctlogin()" title="cadastrar" value="cadastrar">Cadastrar</button>
                    <span id="mensagem" class="mensagem"></span>
        </div>       
        
        <center><h2 class="title" >Médicos</h2></center>
        <hr />
        <div id="dvBase" >    
            <div class="links">
                <button id="medico" class="jmodalabrir link-tu-cadastrar" href="" type="submit" title="Abrir" value="cadastrar">Cadastrar</button>
            </div>

            <a href="../../index.php"><input class=" link-tu-voltar" type="button" value="voltar" class="btn" id="btnEntrar"></a>  

            <!-- tabela -->

            <table class="tabela" Border="1" width="100%">
                <thead>
                        <tr>
                            <th>nome</th>
                            <th>Modificações</th>
                        </tr>
                </thead>
                    
                <tbody>
                    <?php 
                    $Medico = new Crud;
                    
                   $sel = $Medico->select('*','medico','',array());    
//                   var_dump($sel);
                    foreach ($sel as $medico){
                        $nome = $medico['nome'];
//                       $a = implode ('',$nome ); ?>
                       <tr>
                           <td><?php echo $nome;?></td>
                           <td></td>
                       </tr>
                    <?php } ?>
                </tbody>

             </table>
          
            <?php require_once '../../footer.php'; ?>
        </div>  

    </body>
</html>


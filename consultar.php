<?php
require_once("controller/ControllerCadastro.php");
?>

<!DOCTYPE html>
    <html lang="pt-br">
        <head>
            <meta name="format-detection" content="telephone=no"> <meta name="msapplication-tap-highlight" content="no">
	        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover"> <meta name="color-scheme" content="light dark"> 
	        <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
            <title>Sistema de agendamento - consulta</title>
            <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
			<link rel="stylesheet" href="css/consultar.css">
            <script src="js/jquery.js"></script>
			<script src="bootstrap/js/bootstrap.js"></script>
            
        </head>
        <body>
            <div class="container">
                <div class="row">                        
                    <nav class="navbar navbar-dark bg-dark col-12">
                        <a class="navbar-brand" href="index.php">WEB - CLIENTES</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                        aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">                                    
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="consultar.php">Consultar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="editar.php">Editar</a>                                    
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="excluir.php">Excluir</a>
                                </li>
                            </ul>
                        </div>    
                    </nav>    
                </div>
                <div class="row">
                    <div class="card mb-3 col-12">
                        <div class="card-body">
                            <h5 class="card-title">Consultar - Contatos Agendados</h5>
                            <table class="table table-responsive table-hover col-12" style="width: auto;">
                                <thead class="table-active bg-primary">
                                    <tr style="color: white;">
                                      <th scope="col">Nome</th>
                                      <th scope="col">Telefone</th>
                                      <th scope="col">Origem</th>
                                      <th scope="col">Contato</th>
                                      <th scope="col">Observação</th>
                                      <th scope="col">Ação</th>
                                    </tr>
                                </thead> 
                                <?php
                                    $controller = new ControllerCadastro();
                                    $resultado = $controller->listar();
                                    //print_r($resultado);
                                    for($i=0;$i<=count($resultado)-1;$i++){
                                ?>      
                                        <tr>
                                            <td scope="row"><?php echo $resultado[$i]['nome'];?></td>
                                            <td><?php echo $resultado[$i]['telefone'];?></td>
                                            <td><?php echo $resultado[$i]['origem'];?></td>
                                            <td><?php echo $resultado[$i]['data_contato'];?></td>
                                            <td><?php echo $resultado[$i]['observacao'];?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary" style="width: 75px;">Editar</button>
                                                <button type="button" class="btn btn-outline-primary" style="width: 75px;">Excluir</button>
                                            </td>
                                        </tr>
                                <?php
                                    }
                                ?>
                            </table>
                            <button type="submit" class="btn btn-primary">Buscar Agendamento</button>
                        </div>       
                    </div>
                </div>
            </div>
        </body>
    </html>
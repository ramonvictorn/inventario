<?php
    include_once("pcConexao.php");

    $filtro = isset($_GET['inputFiltro'])?$_GET['inputFiltro']:"";
    $sql = "SELECT * FROM `inventario` WHERE inputUfsc like '%$filtro%' ORDER BY inputLantec ASC";
    $sqlNote = "SELECT * FROM `noteInventario` WHERE inputUfsc like '%$filtro%' ";
    $consultaNote = mysqli_query($conexao,$sqlNote);
    $consulta = mysqli_query($conexao,$sql);
    $registros = mysqli_num_rows($consulta);
    $registrosNote = mysqli_num_rows($consultaNote);
    $fundo="#55f4c2";

    // CONSULTA DE IMPRESSORAS
    $sqlImpre = "SELECT * FROM `impressoraInventario` WHERE inputUfsc like '%$filtro%' ORDER BY inputLantec ASC";
    $consultaImpre = mysqli_query($conexao,$sqlImpre);
    $registrosImpre = mysqli_num_rows($consultaImpre);

    //Geral
    $sqlGeralCadastro = "SELECT * FROM `inventarioGeral` WHERE inputUfsc like '%$filtro%' ORDER BY inputLantec ASC";
    $consultaGeralCadastro = mysqli_query($conexao,$sqlGeralCadastro);
    $registrosGeralCadastro = mysqli_num_rows($consultaGeralCadastro);
    ?>

<!DOCTYPE html >
<html lang="pt-bt">

<head>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <meta charset="utf-8">
            <Title> LANTEC2.0 | CONSULTAR DE INVENTÁRIO </Title>
            <link rel="stylesheet" href="estilos.css"/>
            <script type="text/javascript" src="script.js"></script>
            <link rel="shortcut icon" href="img/logo_lantec.ico" type="image/x-icon" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

</head>
<body>
<div class="container-fluid">

    

     
    <div class="row ">
            
                <div class="col-xl-4 col-md-4 menu">
                     <img src="img/logo_lantec.png">
                </div>    
                <div class="col-xl-8 col-md-8 menu">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="cadastrar.php">Cadastrar</a></li>
                        <li><a href="consultar.php">Consultar</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>        
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <h1 class="centro"> Consulta de inventário </h1>
        </div>
    </div>
    
        <form method="get" action="" class="form-inline zero">
          <input type="text" id="inputFiltro" name="inputFiltro" class="form-control">
          <input type="submit" value="Filtrar" class="btn">
        </form>

        <h2> Computadores: </h2>
       <table border="1" class="topoTabela zeroMargin testeTt">
        <tr style=background-color:<?php echo $fundo;?> >
            <td class="topoTabela"><h1>Patrimônio Ufsc</h1></td>
            <td><h1>Patrimônio Lantec</h1></td>
            <td><h1>Marca</h1></td>
            <td><h1>Modelo</h1></td>
            <td><h1>Serial</h1></td>
            <td><h1>Proce. Fabric.</h1></td>
            <td><h1>Proce. Modelo</h1></td>
            <td><h1>Conservação</h1></td>
            <td><h1>Status</h1></td>
            <td><h1>Localização</h1></td>
            <td><h1>Informações complementares</h1></td>
        </tr>
                <?php

                    if($filtro != ""){
                    print "Resutados com $filtro<br>";}
                    print " $registros registros encontrados.";

                ?>
         


            <?php 

                while ($exibirRegistros = mysqli_fetch_array($consulta)) {
                    $patrimônioUfsc = $exibirRegistros[0];
                    $patrimônioLantec = $exibirRegistros[1];
                    $marcas = $exibirRegistros[2];
                    $modelo = $exibirRegistros[3];
                    $serial = $exibirRegistros[4];
                    $processadorFabricante =$exibirRegistros[5];
                    $processadorModelo= $exibirRegistros[6];
                    $conservação = $exibirRegistros[7];
                    $status = $exibirRegistros[8];
                    $localizacao = $exibirRegistros[9];
                    $txtArea = $exibirRegistros[10];
                     

                    if($fundo=="#55f4c2"){
                        $fundo= "#9CA7A3";
                    } else {
                        $fundo= "#55f4c2";
                    }

                    print"<tr style=background-color:$fundo>";
                        print"<td>";
                        print"$patrimônioUfsc";
                        print"</td>";
                    
                        print"<td>";
                        print"$patrimônioLantec";
                        print"</td>";

                        print"<td>";
                        print"$marcas";
                        print"</td>";
                        
                        print"<td>";
                        print"$modelo";
                        print"</td>";

                        print"<td>";
                        print"$serial";
                        print"</td>";

                        print"<td>";
                        print"$processadorFabricante";
                        print"</td>";

                        print"<td>";
                        print"$processadorModelo";
                        print"</td>";

                        print"<td>";
                        print"$conservação";
                        print"</td>";

                        print"<td>";
                        print"$status";
                        print"</td>";

                        print"<td>";
                        print"$localizacao";
                        print"</td>";

                        print"<td>";
                        print"$txtArea";
                        print"</td>";
                       

                    print"</tr>";
                }
           
                print "</table>";    
            ?>  



        <h2> Notebooks: </h2>
       <table border="1" class="topoTabela zeroMargin testeTt">
        <tr style=background-color:<?php echo $fundo;?> >
            <td class="topoTabela"><h1>Patrimônio Ufsc</h1></td>
            <td><h1>Patrimônio Lantec</h1></td>
            <td><h1>Marca</h1></td>
            <td><h1>Modelo</h1></td>
            <td><h1>Serial</h1></td>
            <td><h1>Tela</h1></td>
            <td><h1>Proce. Fabric.</h1></td>
            <td><h1>Proce. Modelo</h1></td>
            <td><h1>Conservação</h1></td>
            <td><h1>Status</h1></td>
            <td><h1>Localização</h1></td>
            <td><h1>Informações complementares</h1></td>
        </tr>

        <?php
            if($filtro != ""){
                print "Resutados com $filtro<br>";}
                print " $registrosNote registros encontrados.";
        ?>

        <?php 

                while ($exibirRegistros = mysqli_fetch_array($consultaNote)) {
                    $patrimônioUfsc = $exibirRegistros[0];
                    $patrimônioLantec = $exibirRegistros[1];
                    $marcas = $exibirRegistros[2];
                    $modelo = $exibirRegistros[3];
                    $serial = $exibirRegistros[4];
                    $tela = $exibirRegistros[5];
                    $processadorFabricante =$exibirRegistros[6];
                    $processadorModelo= $exibirRegistros[7];
                    $conservação = $exibirRegistros[8];
                    $status = $exibirRegistros[9];
                    $localizacao = $exibirRegistros[10];
                    $txtArea = $exibirRegistros[11];
                    
                    

                    if($fundo=="#55f4c2"){
                        $fundo= "#9CA7A3";
                    } else {
                        $fundo= "#55f4c2";
                    }

                    print"<tr style=background-color:$fundo>";
                        print"<td>";
                        print"$patrimônioUfsc";
                        print"</td>";
                    
                        print"<td>";
                        print"$patrimônioLantec";
                        print"</td>";

                        print"<td>";
                        print"$marcas";
                        print"</td>";
                        
                        print"<td>";
                        print"$modelo";
                        print"</td>";

                        print"<td>";
                        print"$serial";
                        print"</td>";

                        print"<td>";
                        print"$tela";
                        print"</td>";

                        print"<td>";
                        print"$processadorFabricante";
                        print"</td>";

                        print"<td>";
                        print"$processadorModelo";
                        print"</td>";

                        print"<td>";
                        print"$conservação";
                        print"</td>";

                        print"<td>";
                        print"$status";
                        print"</td>";

                        print"<td>";
                        print"$localizacao";
                        print"</td>";

                        print"<td>";
                        print"$txtArea";
                        print"</td>";
                       

                    print"</tr>";
                }
           
                print "</table>";    
            ?>  

        <h2> Impressoras:</h2>

        <?php

                    if($filtro != ""){
                    print "Resutados com $filtro<br>";}
                    print " $registrosImpre registros encontrados.";

                ?>
        <table border="1" class="topoTabela zeroMargin testeTt">
            <tr style=background-color:<?php echo $fundo;?> >
                <td class="topoTabela"><h1>Patrimônio Ufsc</h1></td>
                <td><h1>Patrimônio Lantec</h1></td>
                <td><h1>Marca</h1></td>
                <td><h1>Modelo</h1></td>
                <td><h1>Serial</h1></td>
                <td><h1>Colorida</h1></td>
                <td><h1>Digitalização</h1></td>
                <td><h1>Conservação</h1></td>
                <td><h1>Status</h1></td>
                <td><h1>Localização</h1></td>
                <td><h1>Informações complementares</h1></td>
            </tr>
        
        <?php
             while ($exibirRegistros = mysqli_fetch_array($consultaImpre)) {
                    $patrimônioUfsc = $exibirRegistros[0];
                    $patrimônioLantec = $exibirRegistros[1];
                    $marcas = $exibirRegistros[2];
                    $modelo = $exibirRegistros[3];
                    $serial = $exibirRegistros[4];
                    $colorida = $exibirRegistros[5];
                    $digitaliza =$exibirRegistros[6];
                    $conservação = $exibirRegistros[7];
                    $status = $exibirRegistros[8];
                    $localizacao = $exibirRegistros[9];
                    $txtArea = $exibirRegistros[10];
                    
                    

                    if($fundo=="#55f4c2"){
                        $fundo= "#9CA7A3";
                    } else {
                        $fundo= "#55f4c2";
                    }

                    print"<tr style=background-color:$fundo>";
                        print"<td>";
                        print"$patrimônioUfsc";
                        print"</td>";
                    
                        print"<td>";
                        print"$patrimônioLantec";
                        print"</td>";

                        print"<td>";
                        print"$marcas";
                        print"</td>";
                        
                        print"<td>";
                        print"$modelo";
                        print"</td>";

                        print"<td>";
                        print"$serial";
                        print"</td>";

                        print"<td>";
                        print"$colorida";
                        print"</td>";

                        print"<td>";
                        print"$digitaliza";
                        print"</td>";

                        print"<td>";
                        print"$conservação";
                        print"</td>";

                        print"<td>";
                        print"$status";
                        print"</td>";

                        print"<td>";
                        print"$localizacao";
                        print"</td>";

                        print"<td>";
                        print"$txtArea";
                        print"</td>";
                       

                    print"</tr>";
                }
           
                print "</table>";    
        ?>

        <h2> Geral:</h2>
        <?php
            if($filtro != ""){
                print "Resutados com $filtro<br>";}
                print " $registrosGeralCadastro registros encontrados.";
                ?>
        <table border="1" class="topoTabela zeroMargin testeTt">
        <tr style=background-color:<?php echo $fundo;?> >
            <td><h1 class="topoTabela">Tipo</h1></td>
            <td><h1>Patrimônio Ufsc</h1></td>
            <td><h1>Patrimônio Lantec</h1></td>
            <td><h1>Marca</h1></td>
            <td><h1>Modelo</h1></td>
            <td><h1>Serial</h1></td>
            <td><h1>Conservação</h1></td>
            <td><h1>Status</h1></td>
            <td><h1>Localização</h1></td>
            <td><h1>Informações complementares</h1></td>
        </tr>
        <?php
             while ($exibirRegistros = mysqli_fetch_array($consultaGeralCadastro)) {
                    $tipo = "foupegar";
                    $patrimônioUfsc = $exibirRegistros[1];
                    $patrimônioLantec = $exibirRegistros[2];
                    $marcas = $exibirRegistros[3];
                    $modelo = $exibirRegistros[4];
                    $serial = $exibirRegistros[5];
                    $conservação = $exibirRegistros[6];
                    $status = $exibirRegistros[7];
                    $localizacao = $exibirRegistros[8];
                    $txtArea = $exibirRegistros[9];
                    
                    

                    if($fundo=="#55f4c2"){
                        $fundo= "#9CA7A3";
                    } else {
                        $fundo= "#55f4c2";
                    }

                    print"<tr style=background-color:$fundo>";
                        print"<td>";
                        print"$tipo";
                        print"</td>";

                        print"<td>";
                        print"$patrimônioUfsc";
                        print"</td>";
                    
                        print"<td>";
                        print"$patrimônioLantec";
                        print"</td>";

                        print"<td>";
                        print"$marcas";
                        print"</td>";
                        
                        print"<td>";
                        print"$modelo";
                        print"</td>";

                        print"<td>";
                        print"$serial";
                        print"</td>";


                        print"<td>";
                        print"$conservação";
                        print"</td>";

                        print"<td>";
                        print"$status";
                        print"</td>";

                        print"<td>";
                        print"$localizacao";
                        print"</td>";

                        print"<td>";
                        print"$txtArea";
                        print"</td>";
                       

                    print"</tr>";
                }
           
                print "</table>";    
        ?>


        <?php
              mysqli_close($conexao);
        ?>
 </div>
</body>
</html>     
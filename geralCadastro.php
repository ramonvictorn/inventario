<?php
    include_once("pcConexao.php");


$consultaCadastro = mysqli_query($conexao,$sql);


//CONSULTAR ULTIMO INVENTÁRIO CADASTRADO

$sqlPatri = "SELECT patrimonio FROM patrimonioLantecGeral  WHERE  patrimonio In (Select Max(patrimonio) From patrimonioLantecGeral)";
$consultaPatri = mysqli_query($conexao,$sqlPatri);
$registrosPatri = mysqli_num_rows($consultaPatri);

while ($exibirRegistros = mysqli_fetch_array($consultaPatri)){
$ultimoCadastro = $exibirRegistros[0];}
$ultimoCadastro = $ultimoCadastro + "1";

//END LAST INVENTARY

      

mysqli_close($conexao);    
?>



<!DOCTYPE html >
<html lang="pt-bt">

<head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <meta charset="utf-8">
            <Title>Cadastro | Geral</Title>
            <link rel="stylesheet" href="estilos.css"/>
            <script src="script.js"></script>
            <link rel="shortcut icon" href="img/logo_lantec.ico" type="image/x-icon" /> 
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
    
<body>    
<div class="container">
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
<h1 class="centro" id="tituloPaginaCadastro"></h1>
  <form class="fomulariopc" method="post" action="geralProcessa.php">
    <div class="row">
       <label class="form-check-label col-xl-12 col-md-12">
            <input class="form-check-input options" type="checkbox" id="checkUfsc" name="checkUfsc" onChange="habilitar()">Possui patrimônio UFSC</label>
    </div>  
    <div class="row">
     <div class="form-group col-md-6 col-xl-6">
        <label for="inputUfsc" class="labelestilo options">Patrimônio UFSC:</label>
        <input type="number" class="form-control" id="inputUfsc" name="inputUfsc" placeholder="Digite o patrimônio UFSC" disabled>
      </div>
      <div class="form-group col-md-6 col-xl-6">
        <label for="inputPassword4" class="labelestilo options">Patrimônio Lantec</label>
        <input type="number" class="form-control" id="inputLantec" name="inputLantec" placeholder="<?php print"$ultimoCadastro" ?>" value="<?php  print"$ultimoCadastro" ?>" readonly="true">
      </div>
    </div>
    <div class="row">
       <div class="col-xl-4 align-self-center">
        <label for="marcaDigite" class="labelestilo options" >Digite o marca:</label>
        <input type="text" class="form-control" id="geralMarca" name="geralMarca" placeholder="Samsung"/>
      </div>
      <div class="col-xl-4 align-self-center">
        <label for="modeloDigite" class="labelestilo options" >Digite o modelo:</label>
        <input type="text" id="modeloDigite" class="form-control" id="geralModelo" name="geralModelo" placeholder="E430"/>
      </div>
      <div class="col-xl-4  align-self-center">
          <label for="serialDigite" class="labelestilo options">Digite o serial number:</label>
          <input type="text" id="serialDigite" class="form-control" id="geralSerial" name="geralSerial" placeholder="CEFV456"/>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 align-items-center">
            
            <h4 class="margTop centro options">Conservação do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="geralRadioConse" value="Ótimo">
                    Ótimo
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="bomConservacao" value="Bom">
                    Bom
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="razoavelConservacao" value="Razoável">
                    Razoável
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="ruimConservacao" value="Ruim">
                    Ruim
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="pessimaConservacao" value="Péssimas">
                    Péssimas
                </label>
            </div>
             <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioConse" id="outroConservacao" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
        <div class="col-xl-6 col-md-6">            
            <h4 class="margTop centro options">Status do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="geralRadioStatus" id="exampleRadios1" value="Em uso" checked>
                    Em uso
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioStatus" id="emManutencaoStatus" value="Em manutenção">
                    Em manutenção
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioStatus" id="comDefeitoStatus" value="Com defeito">
                    Com defeito
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioStatus" id="semUsoStatus" value="Sem uso (funcionando)">
                    Sem uso (funcionando)
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="geralRadioStatus" id="outroStatus" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
                <label for="localiDigite" class="labelestilo options" >Localização:</label>
                <input type="text" id="localiDigite" class="form-control" name="geralLocalizacao" placeholder="example:Sala 403"/>
            
                <label for="formTextarea1" class="options">Informações complementares:</label>
                <textarea class="form-control" id="formTextarea1" name="geralTxtArea" rows="3"></textarea>
            <small id="passwordHelpInline" class="text-muted">
                Colocar informações adicionais ou que se façam necessárias para identificação do equipamento.
            </small>
        </div>
    </div>
        
     <div class="row">
        <div class="col-xl-12 centro">
            <input class="btn btn-primary btnsubmit" type="submit" value="Cadastrar">  
        </div>
    </div>
  </form>    
</div>   
</body>
</html>            
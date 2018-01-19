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
            <Title>Cadastro | Notebook</Title>
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
                        <li><a href="cadastrar.php" >Cadastrar</a></li>
                        <li><a href="consultar.php" >Consultar</a></li>
                        <li><a href="contato.php" >Contato</a></li>
                    </ul>
                </div>
            
    </div>
<h1 class="centro">Cadastro de Notebook</h1>
  <form class="fomulariopc" method="post" action="noteProcessa.php">
    <div class="row">
       <label class="form-check-label col-xl-12 col-md-12">
            <input class="form-check-input " type="checkbox" id="checkUfsc" name="checkUfsc" onChange="habilitar()"> <h4>Possui      patrimônio UFSC </h4></label>
    </div>  
    <div class="row">
     <div class="form-group col-md-6 col-xl-6">
        <label for="inputUfsc" class="labelestilo"><h4>Patrimônio UFSC:</h4></label>
        <input type="number" class="form-control" id="inputUfsc" name="inputUfsc" placeholder="Digite o patrimônio UFSC" disabled>
      </div>
      <div class="form-group col-md-6 col-xl-6">
        <label for="inputLantec" class="labelestilo"><h4>Patrimônio Lantec</h4></label>
        <input type="number" class="form-control" name="inputLantec" id="inputLantec" placeholder="<?php print"$ultimoCadastro" ?>" value="<?php print"$ultimoCadastro" ?>" readonly="true">
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-md-6">
        <label for="exampleFormControlSelect2"  class="labelestilo"><h4>Selecione a marca:</h4></label>
            <select multiple class="form-control form-control-lg marcas" id="pcOptionsMarcas" name="noteOptionsMarcas">
              <option value="Acer">Acer</option>
              <option value="Samsung">Samsung</option>
              <option value="Hp">Hp</option>
              <option value="Dell">Dell</option>
              <option value="Lenovo">Lenovo</option>
              <option value="Apple">Apple</option>
              <option value="Gateway">Gateway</option>
              <option value="Lg">Lg</option>
              <option value="Philco">Philco</option>
              <option value="Philips">Philips</option>
              <option value="Outro">Outro</option>
            </select>
      </div>
      <div class="col-xl-3 align-self-center">
        <label for="exampleFormControlSelect2" class="labelestilo" ><h4>Digite o modelo:</h4></label>
        <input type="text" class="form-control" placeholder="E430" id="noteInputModelo" name="noteInputModelo"/>
      </div>
      <div class="col-xl-3  align-self-center">
          <label for="exampleFormControlSelect2" class="labelestilo"><h4>Digite o serial number:</h4></label>
          <input type="text" class="form-control" placeholder="CEFV456" id="noteInputSerial" name="noteInputSerial"/>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6">    
            <label for="exampleFormControlSelect2" class="labelestilo" ><h4>Tamanho da tela</h4></label>
            <input type="text" class="form-control" placeholder="exemplo:15,5" id="inputTamanhoTela" name="inputTamanhoTela" />
             <small id="mutedTela" class="text-muted">
                Colocar somente o número, com "."(ponto) e sem a unidade (considerar a unidade polegadas).
            </small>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12 processador">
            <h4>Processador</h4> 
        </div>
    </div>
      
    <div class="row">
      <div class="col-xl-6 col-md-12"> 
        <select class="form-control" id="noteMarcaProcessador" name="noteMarcaProcessador">
            <option value="Intel">Intel</option>
            <option value="Amd">Amd</option>
        </select>
      </div>
      <div class="col-xl-6 col-md-6 ">
        <input type="text" class="form-control inputs" placeholder="Digite o modelo" id="noteInputModeloProcessador" name="noteInputModeloProcessador"/>
      </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 align-items-center">
            
            <h4 class="margTop centro">Conservação do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="exampleRadios1" value="Ótimo">
                    Ótimo
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="exampleRadios2" value="Bom">
                    Bom
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="razoavelConservacao" value="Razoável">
                    Razoável
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="ruimConservacao" value="Ruim">
                    Ruim
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="pessimasConservacao" value="Péssimas">
                    Péssimas
                </label>
            </div>
             <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteConservacao" id="outroConservacao" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
        <div class="col-xl-6 col-md-6">            
            <h4 class="margTop centro">Status do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="noteStatus" id="emUsoStatus" value="Em uso" checked>
                    Em uso
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteStatus" id="emManutencaoStatus" value="Em manutenção">
                    Em manutenção
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteStatus" id="comDefeitoStatus" value="Com defeito">
                    Com defeito
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteStatus" id="SemUsoFuncStatus" value="Sem uso (funcionando)">
                    Sem uso (funcionando)
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="noteStatus" id="exampleRadios3" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
                <label for="noteInputLocalizacao" class="labelestilo" ><h4>Localização:</h4></label>
                <input type="text" class="form-control" placeholder="example:Sala 403" name="noteInputLocalizacao"/>
            
                <label for="exampleFormControlTextarea1"><h4>Informações complementares:</h4></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="noteTxtArea" rows="3"></textarea>
            <small id="passwordHelpInline" class="text-muted">
                Colocar informações adicionais ou que se façam necessárias para identificação do esquipamento.
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
<!DOCTYPE html >
<html lang="pt-bt">

<head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <meta charset="utf-8">
            <Title> | CONTROLE DE INVENTÁRIO </Title>
            <link rel="stylesheet" href="estilos.css"/>
            <script type="text/javascript" src="script.js"></script>
            <link rel="shortcut icon" href="img/logo_lantec.ico" type="image/x-icon" /> 
        

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
                        <li><a href="consultar.php" >Consultar</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            
    </div>
  <div class="row">
    <div class="col-4"></div>
    <div class="col-xl-4 col-md-4 col-sm-12">
      <form name="formInicial" id="formInicial">
      <label for="exampleFormControlSelect1">Selecione o equipamento a cadastrar:</label>
      <select class="form-control" id="selectInicial" name="selectInicial">
        <option value="pc">Computador</option>
        <option value="notebook">Notebook</option>
        <option value="impressora">Impressora/Scanner</option>
        <option value="mesa">Mesa Digitalizadora</option>
        <option value="gravador">Gravador de voz</option>
        <option value="camera">Câmera fotográfica</option>
      </select>
      <button type="button" class="btn btn-primary btnInicial" onClick="redirecionar()">Próximo</button>
    </div>
  </form>
 <div class="col-4"></div>
</div>
</div> 
</body>
</html>            
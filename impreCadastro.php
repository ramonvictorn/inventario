<!DOCTYPE html >
<html lang="pt-bt">

<head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"/>
            <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
            <meta charset="utf-8">
            <Title>Cadastro | Impressora</Title>
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
                        <li><a href="php">Consultar</a></li>
                        <li><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            
    </div>
<h1 class="centro">Cadastro de Impressora</h1>
  <form class="fomulariopc" method="post" action="processapc.php">
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
        <label for="inputPassword4" class="labelestilo"><h4>Patrimônio Lantec</h4></label>
        <input type="number" class="form-control" id="inputPassword4" placeholder="Digite o patrimônio LANTEC">
      </div>
    </div>
    <div class="row">
      <div class="col-xl-6 col-md-6">
        <label for="exampleFormControlSelect2" class="labelestilo"><h4>Selecione a marca:</h4></label>
            <select multiple class="form-control form-control-lg marcas" id="exampleFormControlSelect2">
              <option value="Samsung">Samsung</option>
              <option value="Epson">Epson</option>
              <option value="Hp">Hp</option>
              <option value="Bematech">Bematech</option>
              <option value="Lenovo">Lenovo</option>
              <option value="Cannon">Cannon</option>
              <option value="Brother">Brother</option>
              <option value="Xerox">Xerox</option>
              <option value="Lexmark">Lexmark</option>
                <option value="Kyocera">Kyocera</option>
                <option value="Okidata">Okidata</option>
              <option value="Philips">Philips</option>
              <option value="Outro">Outro</option>
            </select>
      </div>
      <div class="col-xl-3 align-self-center">
        <label for="exampleFormControlSelect2" class="labelestilo" ><h4>Digite o modelo:</h4></label>
        <input type="text" class="form-control" placeholder="E430"/>
      </div>
      <div class="col-xl-3  align-self-center">
          <label for="exampleFormControlSelect2" class="labelestilo"><h4>Digite o serial number:</h4></label>
          <input type="text" class="form-control" placeholder="CEFV456"/>
      </div>
    </div>
      <div class="row">
          <div class="col-xl-12 centro">
              <div class="form-check">
                  <h4>Funções:</h4>
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                        Imprime
                </label>
                  
                 <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                        Impressão colorida
                </label>  
                  
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                        Digitalização
                </label>  
                  
                 
              </div>
          </div>
      </div>
      
    <div class="row">
        <div class="col-xl-6 col-md-6 align-items-center">
            
            <h4 class="margTop centro">Conservação do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="otimoConservacao" value="Ótimo">
                    Ótimo
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="bomConservacao" id="bomConservacao" value="Bom">
                    Bom
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="razoavelConservacao" value="Razoável">
                    Razoável
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="ruimConservacao" value="Ruim">
                    Ruim
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="pessimaConservacao" id="pessimaConservacao" value="Péssimas">
                    Péssimas
                </label>
            </div>
             <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="outroConservacao" id="outroConservacao" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
        <div class="col-xl-6 col-md-6">            
            <h4 class="margTop centro">Status do equipamento</h4>
            <div class="form-check centro">
                <label class="form-check-label ">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="Em uso" checked>
                    Em uso
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="emManutencaoStatus" value="Em manutenção">
                    Em manutenção
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="comDefeitoStatus" id="comDefeitoStatus" value="Com defeito">
                    Com defeito
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="semUsoStatus" id="semUsoStatus" value="Sem uso (funcionando)">
                    Sem uso (funcionando)
                </label>
            </div>
            <div class="form-check centro">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="outroStatus" id="outroStatus" value="Outro">
                    Outro
                </label>
            </div>
        </div>  
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
                <label for="exampleFormControlSelect2" class="labelestilo" ><h4>Localização:</h4></label>
                <input type="text" class="form-control" placeholder="example:Sala 403"/>
            
                <label for="exampleFormControlTextarea1"><h4>Informações complementares:</h4></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            <small id="passwordHelpInline" class="text-muted">
                Colocar informações adicionais ou que se façam necessárias para identificação do equipamento.
            </small>
        </div>
    </div>
        
    <div class="row">
        <div class="col-xl-6">
            <button type="button" class="btn btn-secondary btnPc rigth">Cadastrar</button>  
        </div>
        <div class="col-xl-6">
            <button type="button" class="btn btn-secondary btnPc left">Cancelar</button>
        </div>
    </div>
  </form>    
</div>   
</body>
</html>            
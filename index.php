<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Project Cars</title>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Staatliches&display=swap" rel="stylesheet">
        <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/reqscripts.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <div id="logo">Project Cars <span class="logo1"></span> <span class="logo2"></span></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="margin-left: 20px;" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Comprar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Vender</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Entrar</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Ajuda</a></li>  
                </ul>
            </div>  
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12 anuncio">ANUNCIO AQUI </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3" >
                    <div class="menu">
                        <form>
                            <div class="check-busca-menu">
                                <div class="check-busca-menu-conteudo custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Novo</label>
                                </div>
                                <div class="check-busca-menu-conteudo custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Usado</label>
                                </div>
                            </div>
                            <button type="button" class="btn btn-dark btn-block l-filtro">Limpar filtros</button>
                            <div class="form-group">
                                <select class="form-control menu-group" name="marca">
                                    <option>Marca</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control menu-group" name="modelo">
                                    <option>Modelo</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control menu-group" name="versao">
                                    <option>Versão</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control menu-group" name="versao">
                                    <option>Portas</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>6</option>
                                </select>
                            </div>
                            <h6 class="menu-title">Ano:</h6>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Mínimo">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Máximo">
                                </div>
                            </div>
                            <h6 class="menu-title">Preço:</h6>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Mínimo">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Máximo">
                                </div>
                            </div>
                            <h6 class="menu-title">Quilometragem:</h6>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Mínimo">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Máximo">
                                </div>
                            </div>
                            <h6 class="menu-title">Motorização: <small>Ex: 1.0</small></h6>
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Mínimo">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control menu-group" placeholder="Máximo">
                                </div>
                            </div>
                            <h6 class="menu-title">Câmbio:</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox61" value="option1">
                                <label class="form-check-label" for="inlineCheckbox61">Manual</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox163" value="option3">
                                <label class="form-check-label" for="inlineCheckbox163">Automático</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox262" value="option2">
                                <label class="form-check-label" for="inlineCheckbox262">Automatizado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox363" value="option3">
                                <label class="form-check-label" for="inlineCheckbox363">Sequencial</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox463" value="option3">
                                <label class="form-check-label" for="inlineCheckbox463">CVT</label>
                            </div>
                                <h6 class="menu-title">Itens:</h6>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Ar Condicionado" value="option1">
                                    <label class="form-check-label" for="Ar Condicionado">Ar Condicionado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Alarme" value="option1">
                                    <label class="form-check-label" for="Alarme">Alarme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Air Bag" value="option1">
                                    <label class="form-check-label" for="Air Bag">Air Bag</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Air Bag laterais" value="option1">
                                    <label class="form-check-label" for="Air Bag laterais">Air Bag laterais</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="ISOFIX" value="option1">
                                    <label class="form-check-label" for="ISOFIX">ISOFIX</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="disco" value="option1">
                                    <label class="form-check-label" for="disco">4x Freios a disco</label>
                                </div>
                                <div id="opcionais">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="ABS" value="option1">
                                    <label class="form-check-label" for="ABS">ABS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Mala" value="option1">
                                    <label class="form-check-label" for="Mala">Mala Elétrica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Camera de re" value="option1">
                                    <label class="form-check-label" for="Camera de re">Câmera de ré</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Direcaoregulavel" value="option1">
                                    <label class="form-check-label" for="Direcaoregulavel">Direção regulável</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Computador" value="option1">
                                    <label class="form-check-label" for="Computador">Computador de bordo</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="DirecaoE" value="option1">
                                    <label class="form-check-label" for="DirecaoE">Direção Elétrica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="DirecaoH" value="option1">
                                    <label class="form-check-label" for="DirecaoH">Direção Hidráulica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Conta-giros" value="option1">
                                    <label class="form-check-label" for="Conta-giros">Conta-giros</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="chuva" value="option1">
                                    <label class="form-check-label" for="chuva">Sensor de chuva</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="leve-me/siga-me" value="option1">
                                    <label class="form-check-label" for="leve-me/siga-me">leve-me/siga-me(luz)</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Vidro" value="option1">
                                    <label class="form-check-label" for="Vidro">Vidro elétrico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="couro" value="option1">
                                    <label class="form-check-label" for="couro">Banco de couro</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Trava" value="option1">
                                    <label class="form-check-label" for="Trava">Trava Elétrica</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Blindado" value="option1">
                                    <label class="form-check-label" for="Blindado">Blindado</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tracao" value="option1">
                                    <label class="form-check-label" for="tracao">Controle de tração</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Retrovisor" value="option1">
                                    <label class="form-check-label" for="Retrovisor">Retrovisor elétrico</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Teto" value="option1">
                                    <label class="form-check-label" for="Teto">Teto solar</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="4x4" value="option1">
                                    <label class="form-check-label" for="4x4">Tração 4x4</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="GPS" value="option1">
                                    <label class="form-check-label" for="GPS">GPS</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Multimidia" value="option1">
                                    <label class="form-check-label" for="Multimidia">Multimídia</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Ar digital" value="option1">
                                    <label class="form-check-label" for="Ar digital">Ar digital</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="crepuscular" value="option1">
                                    <label class="form-check-label" for="crepuscular">Sensore crepuscular</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="reboque" value="option1">
                                    <label class="form-check-label" for="reboque">Gancho reboque</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="estabilidade" value="option1">
                                    <label class="form-check-label" for="estabilidade">Controle de estabilidade</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="rampa" value="option1">
                                    <label class="form-check-label" for="rampa">Assistente de rampa</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Piloto" value="option1">
                                    <label class="form-check-label" for="Piloto">Piloto automático</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Rack" value="option1">
                                    <label class="form-check-label" for="Rack">Rack de teto</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Rodas de liga leve" value="option1">
                                    <label class="form-check-label" for="Rodas de liga leve">Rodas de liga leve</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="start-stop" value="option1">
                                    <label class="form-check-label" for="start-stop">Função start-stop</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Chave presencial" value="option1">
                                    <label class="form-check-label" for="Chave presencial">Chave presencial</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Partida do motor por botão" value="option1">
                                    <label class="form-check-label" for="Partida do motor por botão">Partida do motor por botão</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="Xenon" value="option1">
                                    <label class="form-check-label" for="Xenon">Xênon</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="artida remota do motor" value="option1">
                                    <label class="form-check-label" for="artida remota do motor">Partida remota do motor</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="parkassist" value="option1">
                                    <label class="form-check-label" for="parkassist">Park Assist</label>
                                </div>
                            </div>
                                <button type="button" class="btn btn-dark btn-block" id="btn-mostrar">Mostrar mais</button>
                            <h6 class="menu-title">Combustível:</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5611" value="option1">
                                <label class="form-check-label" for="inlineCheckbox5611">Gasolina</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox631" value="option3">
                                <label class="form-check-label" for="inlineCheckbox631">Etanol</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox621" value="option2">
                                <label class="form-check-label" for="inlineCheckbox621">Diesel</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3731" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3731">GNV (Gás Natural)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2731" value="option3">
                                <label class="form-check-label" for="inlineCheckbox2731">Flex</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1731" value="option3">
                                <label class="form-check-label" for="inlineCheckbox1731">Elétrico</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox57731" value="option3">
                                <label class="form-check-label" for="inlineCheckbox57731">Híbrido</label>
                            </div>
                            <h6 class="menu-title">Cor:</h6>
                            <div class="form-group">
                                <select class="form-control menu-group" name="versao">
                                    <option>Selecione</option>
                                    <option>Preto</option>
                                    <option>Branco</option>
                                    <option>Prata</option>
                                    <option>Cinza</option>
                                </select>
                            </div>
                            <h6 class="menu-title">Tipo:</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox111" value="option1">
                                <label class="form-check-label" for="inlineCheckbox111">Sedã</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox311" value="option3">
                                <label class="form-check-label" for="inlineCheckbox311">Hatch</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox211" value="option2">
                                <label class="form-check-label" for="inlineCheckbox211">Coupé</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9311" value="option3">
                                <label class="form-check-label" for="inlineCheckbox9311">Conversível</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4311" value="option3">
                                <label class="form-check-label" for="inlineCheckbox4311">Cabriolet</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox53111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox53111">Pick-up</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox7111">Perua/SW</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox8111">Esportivo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox31111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox31111">Jipe (Off-Road)</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox41111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox41111">SUV</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox51111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox51111">Minivan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="motorhome" value="option3">
                                <label class="form-check-label" for="motorhome">MotorHome</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox61111" value="option3">
                                <label class="form-check-label" for="inlineCheckbox61111">Buggy</label>
                            </div>
                            <h6 class="menu-title">Documento:</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12111" value="option1">
                                <label class="form-check-label" for="inlineCheckbox12111">Licenciado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="pendende" value="option3">
                                <label class="form-check-label" for="pendente">Pendente</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="rf" value="option2">
                                <label class="form-check-label" for="rf">Recibo Fechado</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="ra" value="option3">
                                <label class="form-check-label" for="ra">Recibo Aberto</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="cm" value="option3">
                                <label class="form-check-label" for="cm">C/ Multas</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="baixa" value="option3">
                                <label class="form-check-label" for="baixa">Documento C/ baixa</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="financiado" value="option3">
                                <label class="form-check-label" for="financiado">Financiado</label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="buscar">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar Veículos...">
                                    <div class="input-group-append">
                                        <button class="btn btn-dark btn-buscar" type="submit">Buscar</button>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm listar">
                            <div class="input-group ordem">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Ordernar por:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Mais relevantes</option>
                                <option value="1">Mais recentes</option>
                                <option value="2">Menor preço</option>
                                <option value="3">Maior preço</option>
                                <option value="4">Menor ano</option>
                                <option value="5">Maior preço</option>
                                <option value="6">Menor km</option>
                                <option value="7">Maior km</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm">
                        <div class="total-anuncios listar">
                            1 - 30 de 100.000 anuncios
                        </div>
                        </div>
                        <div class="col-sm listar">
                            <div class="input-group ordem">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Vendedor:</label>
                                </div>
                                <select class="custom-select" id="inputGroupSelect01">
                                <option selected>Particular/Profissional</option>
                                <option value="1">Particular</option>
                                <option value="2">Profissional</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                        <div class="blocos-post col-md-6 col-lg-3">
                            <a href="vv.php">
                            <div class="index-post">
                                <img src="imagens/postimg.jpg";>
                                <h5>VW - PARATI</h5>
                                <div class="pinfo">
                                    100.000km | 2001 | Manual | Gasolina<br>
                                    Mods: Estética, Performance<br>
                                    Licenciado
                                </div>
                                <h4>R$ 9.0000</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 footer">
                    Footer
                </div>
            </div>
        </div>
    </body>
</html>

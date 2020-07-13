<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <!-- JQUERY declaration -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <!--  -->

  <title>Facile Envio de Email</title>
</head>
<body>
  
  <form enctype="multipart/form-data" id="container" name="container">
    <h1>FORMULÁRIO PARA ENVIO DE COMPROVANTE</h1>
    <div id='peoples-container'>
      <div class="input">
        <label for="code">Código</label><br>
        <input type="text" class="long-text" name="code" id="code">
      </div>
      <div class="input">
        <label for="email">E-mail</label><br>
        <input type="text" class="long-text" name="email" id="email">
      </div>
      
      <div id="passengers-container">
        <div class="passengerRow">
          <div class="input">
            <label for="name">Nome do passageiro</label><br>
            <input type="text" class="long-text name" name="name">
          </div>

          <div class="input">
            <label for="ticket">Ticket</label><br>
            <input type="text" class="long-text ticket" name="ticket">
          </div>

          <img src="img/add.png" alt="adicionar" id='add'>
        </div>      
      </div>

      <div id="ageCount-container">
          <div class="input">
            <label for="adults">Adultos</label><br>
            <input type="text" class="short-text" name="adults" id="adults">
          </div>

          <div class="input">
            <label for="childrens">Crianças</label><br>
            <input type="text" class="short-text" name="childrens" id="childrens">
          </div>

          <div class="input">
            <label for="babys">Bebês</label><br>
            <input type="text" class="short-text" name="babys" id="babys">
          </div>
      </div>
    </div>
    <div id="trip-container">
      <div id="tripInfos-container">
        <div class="input">
            <label for="from">Origem</label><br>
            <input type="text" class="long-text" name="from" id="from">
          </div>

          <div class="input">
            <label for="to">Destino</label><br>
            <input type="text" class="long-text" name="to" id="to">
          </div>
      </div>
      <div id="date-container">
        <div id="dateLeave-container">
            <div class="input">
              <label for="dateLeave">Data Saida</label><br>
              <input type="text" class="short-text" name="dateLeave" id="dateLeave">
            </div>

            <div class="input">
              <label for="hourLeave">Hora saida</label><br>
              <input type="text" class="short-text" name="hourLeave" id="hourLeave">
            </div>
        </div>
        <div id="dateArrive-container">
            <div class="input">
              <label for="dateArrive">Data Chegada</label><br>
              <input type="text" class="short-text" name="dateArrive" id="dateArrive">
            </div>

            <div class="input">
              <label for="hourArrive">Hora chegada</label><br>
              <input type="text" class="short-text" name="hourArrive" id="hourArrive">
            </div>
        </div>
        <label for="connection">Tem conexão?</label>
        <input type="checkbox" name="connection" id="connection">
      </div>
      <div id="conn-container">
          <div id="connectionRow">
            <div class="input">
              <label for="localConn">Local</label><br>
              <input type="text" class="short-text localConn" name="localConn" id="localConn">
            </div>
            <div class="input">
              <label for="timeConn">Tempo</label><br>
              <input type="text" class="short-text timeConn" name="timeConn">
            </div>
            <img src="img/add.png" alt="adicionar" id='addConn'>
          </div>
      </div>
    </div>

    <div id="tripBack-container">
    <h1>VOLTA</h1>
      <div id="tripBackInfos-container">
        <div class="input">
            <label for="backFrom">Origem</label><br>
            <input type="text" class="long-text" name="backFrom" id="backFrom">
          </div>

          <div class="input">
            <label for="backTo">Destino</label><br>
            <input type="text" class="long-text" name="backTo" id="backTo">
          </div>
      </div>
      <div id="backDate-container">
        
        <div id="backDateLeave-container">
            <div class="input">
              <label for="backDateLeave">Data Saida</label><br>
              <input type="text" class="short-text" name="backDateLeave" id="backDateLeave">
            </div>

            <div class="input">
              <label for="backHourLeave">Hora saida</label><br>
              <input type="text" class="short-text" name="backHourLeave" id="backHourLeave">
            </div>
        </div>
        <div id="backDateArrive-container">
            <div class="input">
              <label for="backDateArrive">Data Chegada</label><br>
              <input type="text" class="short-text" name="backDateArrive" id="backDateArrive">
            </div>

            <div class="input">
              <label for="backHourArrive">Hora chegada</label><br>
              <input type="text" class="short-text" name="backHourArrive" id="backHourArrive">
            </div>
        </div>
        <label for="backConnection">Tem conexão?</label>
        <input type="checkbox" name="backConnection" id="backConnection">
      </div>
      <div id="backConn-container">
          <div id="backConnectionRow">
            <div class="input">
              <label for="backLocalConn">Local</label><br>
              <input type="text" class="short-text backLocalConn" name="backLocalConn">
            </div>
            <div class="input">
              <label for="backTimeConn">Tempo</label><br>
              <input type="text" class="short-text backTimeConn" name="backTimeConn">
            </div>
            <img src="img/add.png" alt="adicionar" id='addBackConn'>
          </div>
      </div>
    </div>
    <p id="back">adicionar volta</p>
    <p id="removeBack">Remover volta</p>

    <div id="bottom">
      <input type="file" name="comp1" class="inputfile file" id="file">
      <label for="file" id="label1"><strong>Selecione um arquivo</strong></label>
      <input type="file" name="comp2" class="inputfile" id="file2">
      <label for="file2" id="label2"><strong>Selecione um arquivo</strong></label><br>
      <button type="submit" class="button" id="btn-submit">Enviar</button>
    </div>
</form>
<div id="response">
  <p id="return"></p>
</div>

  <script src="js/script.js"></script>
  <script src="js/ajax.js"></script>
  <script>

  </script>
</body>
</html>
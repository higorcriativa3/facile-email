<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Facile Envio de Email</title>
</head>
<body>
  <div id="container">
  <h1>FORMULÁRIO PARA ENVIO DE COMPROVANTE</h1>
  <div id='peoples-container'>
    <div class="input">
      <label for="code">Código</label><br>
      <input type="text" class="long-text" name="code" id="code">
    </div>
    
    <div id="passengers-container">
      <div class="input">
        <label for="name">Nome do passageiro</label><br>
        <input type="text" class="long-text" name="name" id="name">
      </div>

      <div class="input">
        <label for="ticket">Ticket</label><br>
        <input type="text" class="long-text" name="ticket" id="ticket">
      </div>

      <img src="img/add.png" alt="adicionar">
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
          <label for="name">Origem</label><br>
          <input type="text" class="long-text" name="name" id="name">
        </div>

        <div class="input">
          <label for="ticket">Destino</label><br>
          <input type="text" class="long-text" name="ticket" id="ticket">
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
  </div>
  </div>
</body>
</html>
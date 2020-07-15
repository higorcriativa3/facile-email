<?php

  require 'includes/mailsender.php';
  extract($_POST);
  extract($_FILES);

  print_r('ok');

/*   $from = strtoupper($from);
  $to = strtoupper($to);

  $backFrom = strtoupper($backFrom);
  $backTo = strtoupper($backTo); */

  if($adults == ''){
    $adults = 0;
  }
  if($childrens == ''){
    $childrens = 0;
  }
  if($babys == ''){
    $babys = 0;
  }

  $bodyComp = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Facile Email</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>';

  $bodyComp .= '<body style="margin: 0; padding: 10px;">
    <div style="padding: 35px; width: 100%; background-color: orange; color: white; text-align: center;"><h1 style="font-size: 27px;">Reserva confirmada</h1></div>
    <br/>
    
    <div style="margin: 0 auto; padding: 35px; width: 100%; text-align: center; background-color: #28ACE4; color: white;"><h2>Detalhes da sua viagem para '.$to.'</h2></div>
    <div style="margin: 0 auto; padding: 35px; width: 100%; text-align: center; background-color: #b5eaff; color: black;">
    <h3 style="text-align: center;">Confirmação de reserva: Bilhetes Emitidos</h3>
    <p style="text-align: center;"><strong>Código da reserva: </strong>'.$code.'</p>
    <br/>
    <br/>
    <p><strong>Informações dos passageiros:</strong></p>
    <table style="border-bottom: 1px solid #ddd; padding: 15px; text-align: left; width: 100%">
    <tr><th></th></tr>
    <tr><td>'.$name.' </td><td>Ticket: '.$ticket.'</td></tr>'
  ;

  if(isset($name1)){
    $bodyComp .= '<tr><td>'.$name1.' </td><td>Ticket: '.$ticket1.'</td></tr>';
  }
  if(isset($name2)){
    $bodyComp .= '<tr><td>'.$name2.' </td><td>Ticket: '.$ticket2.'</td></tr>';
  }
  if(isset($name3)){
    $bodyComp .= '<tr><td>'.$name3.' </td><td>Ticket: '.$ticket3.'</td></tr>';
  }
  if(isset($name4)){
    $bodyComp .= '<tr><td>'.$name4.' </td><td>Ticket: '.$ticket4.'</td></tr>';
  }

  $bodyComp .= '<br/><tr><td>Adultos: '.$adults.' Crianças: '.$childrens.' Bebês: '.$babys.'</td></tr></table>
  <h1 style="text-align: left;">Ida</h1>
  <table style="border: none; width: 100%; padding: 15px; text-align: left;">
    <tr><th style="font-size: 19px;">'.$from.'</th><th style="font-size: 19px;">'.$to.'</th></tr>
    <tr><td>Data: '.$dateLeave.'</td><td>Data: '.$dateArrive.'</td></tr>
    <tr><td>Hora: '.$hourLeave.'</td><td>Hora: '.$hourArrive.'</td></tr>'
  ;

  if(isset($connection) && $connection == 'on') {
    $bodyComp .= '<tr><th>Conexão</th></tr>';
    $bodyComp .= '<tr><td>Local: '.$localConn.' Tempo: '.$timeConn.'</td></tr>';
    if(isset($localConn1)){
      $bodyComp .= '<tr><td>Local: '.$localConn1.'  Tempo: '.$timeConn1.'</td></tr>';
    }
    if(isset($localConn2)){
      $bodyComp .= '<tr><td>Local: '.$localConn2.'  Tempo: '.$timeConn2.'</td></tr>';
    }
    if(isset($localConn3)){
      $bodyComp .= '<tr><td>Local: '.$localConn3.'  Tempo: '.$timeConn3.'</td></tr>';
    }
  }

  $bodyComp .= '</table>';

  if(isset($backFrom) && $backFrom != ''){
    $bodyComp .= '<h1 style="text-align: left;">Volta</h1>
      <table style="border: none; width: 100%; padding: 15px; text-align: left;">
      <tr><th>'.$backFrom.'</th><th>'.$backTo.'</th></tr>
      <tr><td>Data: '.$backDateLeave.'</td><td>Data: '.$backDateArrive.'</td></tr>
      <tr><td>Hora: '.$backHourLeave.'</td><td>Hora: '.$backHourArrive.'</td></tr>'
    ;
    if(isset($backConnection) && $backConnection == 'on') {
      $bodyComp .= '<tr><th>Conexão</th></tr>';
      $bodyComp .= '<tr><td>Local: '.$backLocalConn.' Tempo: '.$backTimeConn.'</td></tr>';
      if(isset($backLocalConn1)){
        $bodyComp .= '<tr><td>Local: '.$backLocalConn1.'  Tempo: '.$backTimeConn1.'</td></tr>';
      }
      if(isset($backLocalConn2)){
        $bodyComp .= '<tr><td>Local: '.$backLocalConn2.'  Tempo: '.$backTimeConn2.'</td></tr>';
      }
      if(isset($backLocalConn3)){
        $bodyComp .= '<tr><td>Local: '.$backLocalConn3.'  Tempo: '.$backTimeConn3.'</td></tr>';
      }
    }
  }

  $bodyComp .= '</table></div><br/>
  <div style="padding: 35px; width: 100%; background-color: orange; color: white; text-align: center;">
  <p>Obrigado por nos escolher para a sua viagem</p>
  <a href="https://facileviagens.com">www.facileviagens.com</a>
  </div>
  </body></html>
  ';

  $file = $_FILES['comp1'];
  $filePath = "uploads/" . $file['name'];
  move_uploaded_file($file['tmp_name'], $filePath);

  $file2 = $_FILES['comp2'];
  $filePath2 = "uploads/" . $file2['name'];
  move_uploaded_file($file2['tmp_name'], $filePath2);

  $m = new MailSender;

  $m->sendMail($email, $name, $bodyComp, $filePath, $filePath2, $to);
?>
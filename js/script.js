$('#tripBack-container').hide();
$("#removeBack").hide();
$('#conn-container').hide();
$('#backConn-container').hide();
$('#load').hide();
$('#success').hide();

var i = 1;
var j = 1;
var k = 1;

$("#add").on('click', function () {
  if(i < 5){
    var el = $('.passengerRow');
    var clone = el.clone(true).attr('class', 'additional');
    clone.find(".name").attr('name', `name${i}`);
    clone.find(".name:input").val('');
    clone.find(".ticket").attr('name', `ticket${i}`);
    clone.find(".ticket:input").val('');
    var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

    clone.find("img").remove();
    clone.append(remove);

    $('#passengers-container').append(clone);
    i++
  } else {
    alert('Limite de 5 passageiros');
  }
  
});

$("#addConn").on('click', function () {
  var el = $('#connectionRow');
  var clone = el.clone(true).attr('class', 'additionalConn');
  clone.find(".localConn").attr('name', `localConn${j}`);
  clone.find(".localConn:input").val('');
  clone.find(".timeConn").attr('name', `timeConn${j}`);
  clone.find(".timeConn:input").val('');
  var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

  clone.find("img").remove();
  clone.append(remove);

  $('#conn-container').append(clone);

  j++
});

$("#addBackConn").on('click', function () {
  var el = $('#backConnectionRow');
  var clone = el.clone(true).attr('class', 'additionalBackConn');
  clone.find(".backLocalConn").attr('name', `backLocalConn${k}`);
  clone.find(".backLocalConn:input").val('');
  clone.find(".backTimeConn").attr('name', `backTimeConn${k}`);
  clone.find(".backTimeConn:input").val('');
  
  var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

  clone.find("img").remove();
  clone.append(remove);

  $('#backConn-container').append(clone);

  k++;
});

$("#back").on('click', function() {
  $('#tripBack-container').show();
  $('#back').hide();
  $("#removeBack").show();
});
$("#removeBack").on('click', function() {
  $('#tripBack-container').hide();
  $("#removeBack").hide();
  $("#back").show();
});

$("#connection").on('click', function(){
  if($("#connection").is(':checked')) {
    $('#conn-container').show();
  } else {
    $('#conn-container').hide();
  }
})

$("#backConnection").on('click', function(){
  if($("#backConnection").is(':checked')) {
    $('#backConn-container').show();
  } else {
    $('#backConn-container').hide();
  }
})

function remove(el) {
  el.parentElement.remove();
}

$('#file').on('change', function(){
  var fileName = $('#file')[0].files[0]['name'];

  $('#label1').text(fileName);
})

$('#file2').on('change', function(){
  var fileName = $('#file2')[0].files[0]['name'];

  $('#label2').text(fileName);
});

$('#closeSuccess').on('click', function() {
  $('#success').hide();
})
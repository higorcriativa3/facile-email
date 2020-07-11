$('#tripBack-container').hide();
$("#removeBack").hide();

$("#add").on('click', function () {
  var el = $('.passengerRow');
  var clone = el.clone(true).attr('class', 'additional');
  var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

  clone.find("img").remove();
  clone.append(remove);

  $('#passengers-container').append(clone);
});

$("#addConn").on('click', function () {
  var el = $('#connectionRow');
  var clone = el.clone(true).attr('class', 'additionalConn');
  var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

  clone.find("img").remove();
  clone.append(remove);

  $('#conn-container').append(clone);
  console.log(clone)
});

$("#addBackConn").on('click', function () {
  var el = $('#backConnectionRow');
  var clone = el.clone(true).attr('class', 'additionalBackConn');
  var remove = clone.find("img").attr({'alt': 'remover','src': 'img/remove.png','id': 'remove', 'onclick': 'remove(this)'});

  clone.find("img").remove();
  clone.append(remove);

  $('#backConn-container').append(clone);
  console.log(clone)
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

function remove(el) {
  el.parentElement.remove();
  console.log();
}
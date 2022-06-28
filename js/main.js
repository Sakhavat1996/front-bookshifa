$('#addBtn').on('click',function(){
  let length = $('.pill-list').length
  var count = $('<p />', { 
    class: 'number' ,
    text: length + 1
  });
  var input1 = $('<input />', { 
    placeholder:'Dərmanın adı'
  });
  var input2 = $('<input />', { 
    placeholder:'Dozaj'
  });
  var input3 = $('<input />', { 
    placeholder:'Müddət'
  });
  var btn = $('<button />', { 
    class: 'note_btn' ,
    text:'Not əlavə et.'
  });
  var pill_list = $('<div/>',{
      class:'pill-list'
  })
  count.appendTo(pill_list)
  input1.appendTo(pill_list);
  input2.appendTo(pill_list);
  input3.appendTo(pill_list);
  btn.appendTo(pill_list);
  pill_list.appendTo('.pill-container');
})

$(document).on('click','.note_btn',function(){
  $('.addModal[aria-labelledby="exampleModalLabel"]').modal('show')
})

$(document).on('click','.delete_file',function(){
  let id = parseInt($(this).data('file'));
  $('.fileModal').modal('show').attr('id',id);
})

$(document).on('show.bs.modal', '.modal', function() {
  const zIndex = 1040 + 10 * $('.modal:visible').length;
  $(this).css('z-index', zIndex);
  setTimeout(() => $('.modal-backdrop').not('.modal-stack').css('z-index', zIndex - 1).addClass('modal-stack'));
});

$('.modal').on("hidden.bs.modal", function (e) { 
  if ($('.modal:visible').length) { 
      $('body').addClass('modal-open');
  }
});

$(document).on('click','.delete_pdf',function(){
  let id = parseInt($(this).data('pdf'));
  $('.receptModal').modal('show').attr('id',id)
})

deleteItem =(a , modal)=>{
  a.fadeOut(300, function(){
    a.remove();
  })
  modal.modal('hide')
}

$('.receptModal button.yes').on('click' , function(){
  const modal = $(this).parents('.modal');
  let id = parseInt(modal.attr('id'));
  let $parent = $(`.delete_pdf[data-pdf = ${id}]`).parents('.pdf-link')
  deleteItem($parent , modal);
})

$('.fileModal button.yes').on('click' , function(){
  const modal = $(this).parents('.modal');
  let id = parseInt(modal.attr('id'));
  let $parent = $(`.delete_file[data-file = ${id}]`).parents('.pdf-link')
  deleteItem($parent , modal);
})

$('.edit_btn').on('click',function(){
  $('.same_btns').addClass('hide')
  $('.second_btns').removeClass('hide');
  $('.pdf-link .doc-img .delete').addClass('active');
  $('.item-head button.change_btn').addClass('active');
})

$('.change_btn').on('click',function(){
  if($(this).find('.save').hasClass('hide')){
    $(this).find('.save').removeClass('hide');
    $(this).find('.edit').addClass('hide');
    $(this).hasClass('change_name') ? $(this).next().find('span').attr('contenteditable' ,true).addClass('editable') : editOrSave($(this))
  }
  else{
    $(this).find('.edit').removeClass('hide');
    $(this).find('.save').addClass('hide');
    $(this).hasClass('change_name') ? $(this).next().find('span').removeAttr('contenteditable' ).removeClass('editable') : editOrSave($(this))
  }

})

editOrSave=(item)=>{
  var btn=item;
  let text=$(".add-notes").text();
  if(!(btn.find('.save').hasClass('hide')))
  {
    $("#editcontent").show();
    $("#editcontent").text(text);
    $(".add-notes").hide();
  }
  else{
     $(".add-notes").text($("#editcontent").text());
     $("#editcontent").hide();
     $(".add-notes").show();
  }
}
$('.save_btn').on('click',function(){
  $('.same_btns').removeClass('hide')
  $('.second_btns').addClass('hide');
  $('.pdf-link .doc-img .delete').removeClass('active');
  $('.item-head button.change_btn').removeClass('active');
  $('.info-room span.editable').removeAttr('contenteditable' ).removeClass('editable');
  $('.change_btn').find('.save').addClass('hide');
  $('.change_btn').find('.edit').removeClass('hide');
  $("#editcontent").hide();
  $(".add-notes").show();
})

$('header .hamburger').on('click',function(){
  $('.responsive-ul').toggleClass('show');
  $(this).toggleClass('open')
})

// header-new-toggle-btns
$('.header-blue-btn').on('click',function(){
  let target = $(this).data('target');
  if($(`.same-absolute#${target}`).hasClass('active')){
    $(`.same-absolute#${target}`).removeClass('active');
  }
  else{
    $('.same-absolute').removeClass('active')
    $(`.same-absolute#${target}`).addClass('active');
  }
})

$(document).mouseup(function(e) {
  var container = $('.header-blue-btn');
  var hamburger = $('header .hamburger');
  if (
    !container.is(e.target) 
    && container.has(e.target).length === 0 
    && !$(e.target).hasClass('same-absolute')
    && !$(e.target).parents('.same-absolute').length 
    && !hamburger.is(e.target) 
    && hamburger.has(e.target).length === 0 
    && !$(e.target).hasClass('responsive-ul')
    && !$(e.target).parents('.responsive-ul').length) 
  {
    $('.same-absolute').removeClass('active');
    $('.responsive-ul').removeClass('show');
    hamburger.removeClass('open')
  }
});

$('.message-box .message-close').on('click',function(){
  $(this).parents('.message-box').remove();
})

// new modal js
var $file = $('input[type="file"]');
var $text = $('.text-file input');
var $delete = $('.text-file button')
$file.on('change',function(e){
    var input = e.target;
    var reader = new FileReader();
    reader.onload = function(){
      var name = input.files[0].name;
      $text.val(name);
      $delete.show();
    };
    reader.readAsDataURL(input.files[0]);
});

$delete.on('click',function(e){
  $text.val('');
  $(this).hide();
})

var index = 0;
$('.add-new-form').on('click',function(){
  index++;
  var label1 = $('<label />', { 
    text:'Diaqnozun adı'
  });
  var inputFirst = $('<input />', { 
    type : 'text',
    placeholder:'Diaqnozun adını burda qeyd edin (məsələn, Sətəlcəm)',
    required: true
  });
  var label2 = $('<label />', { 
    text:' Diaqnozun mətni*'
  });
  var textarea = $('<textarea />', { 
    placeholder:'Diaqnozun əsas mətni varsa onu burada yaza bilərsiniz',
    required: true
  });
  var buttonClose = $('<button />', {
    type:"button",
    append: '<img src="img/esc.svg"/>',
    class:'close',
    required: true
  });
 
  var box = $('<div />', { 
    class:`same-style-box box-${index}`
  });
 
  inputFirst.appendTo(label1);
  textarea.appendTo(label2);
  label1.appendTo(box);
  label2.appendTo(box);
  buttonClose.appendTo(box);
  box.insertBefore('.typeModal .modal-body .add-new-form');
})

$(document).on('click','.typeModal .modal-body .same-style-box .close',function(){
  $(this).parents('.same-style-box').remove();
})

$('.back-to-first-modal').on('click',function(){
  $(this).parents('.modal').modal('hide')
})

$('.pattern-boxes a').on('click',function(e){
  e.preventDefault();
  $('.pattern-boxes a').removeClass('choose');
  $(this).addClass('choose');
})


$('.profile-information form').on('submit',function(e){
  e.preventDefault();
  $('.disabled-row label').toggleClass('disabled');
  $('.disabled-row input').toggleClass('disabled');
  if(!$('.third-row input').hasClass('active')){
    $('.third-row input').addClass('active');
    $('.third-row input').attr('disabled',false);
  }else{
    $('.third-row input').removeClass('active');
    $('.third-row input').attr('disabled',true);
  }
})

var lang = true;

$('#eng_logo').click(function() {
    if (lang) {
      $('.en').show();
      $('.pt-BR').hide();
      $('#eng_logo').attr("src","assets/img/icon-portuguese.png");
    } else {
      $('.en').hide();
      $('.pt-BR').show();
      $('#eng_logo').attr("src","assets/img/icon-english.png");
    }
    lang = !lang
    
  });
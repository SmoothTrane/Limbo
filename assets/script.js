/* global $ */
$(function(){
  
  $('.js-clearSearchBox').css('opacity', '0');
});

$(function(){
  $('.js-searchBox-input').keyup(function() {
    if ($(this).val() !='' ) {
      $('.js-clearSearchBox').css('opacity', '1');
    } else {
      $('.js-clearSearchBox').css('opacity', '0');
    };
    
    $(window).bind('keydown', function(e)  {
      if(e.keyCode === 27) {
        $('.js-searchBox-input').val('');
      };
    });
  });
});
// click the button 

$(function(){
  $('.js-clearSearchBox').click(function() {
    $('.js-searchBox-input').val('');
    $('.js-searchBox-input').focus();
    $('.js-clearSearchBox').css('opacity', '0');
  });

});



$(function(){
  
  
$('.data-row').click(function(){
  var row = $(this);
  $('tr').css('background-color', 'white');
  row.css('background-color', '#D2D7D3');
  
    $("#main-container").fadeIn(function(){
     var desc = row.children(".desc").text();
     //TODO UPDATE CARD WITH TABLE INFORMATION
    });
  
});

  $(".remove").click(function(){
    $("#main-container").fadeOut();
    
  });
  
    $("#main-container").click(function(){
    $("#main-container").fadeOut();
    
  });
  
  
  
  
  
})


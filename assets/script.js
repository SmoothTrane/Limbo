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
      var card = $(this).children(".card");
      console.log(card);
     var desc = row.children(".desc").text();
     var finder = row.children(".finder").text();
     var date = row.children(".create").text();
     card.find("h2").text(desc);
     card.find("#title-text").text(finder);
     
   
     //TODO UPDATE CARD WITH TABLE INFORMATION
    });
  
});

  $(".remove").click(function(){
    $("#main-container").fadeOut();
    
  });
  
    $("#main-container").click(function(){
    $("#main-container").fadeOut();
    
  });
  
  
  
  
  
});

$(function(){
  $(".switch-btn").click(function(){
    var currentBtn = $(this);
    var selectedBtn = $(".select");
    selectedBtn.removeClass("select");
    currentBtn.addClass("select");
    
  
    
  });
  
  
  
  
});
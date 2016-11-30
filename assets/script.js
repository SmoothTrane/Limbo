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
    var clickedBtn = $(this);
    var currentBtn = $(".select");
    
    var currentFormName = currentBtn.text().trim().toLowerCase();
    var nextFormName = clickedBtn.text().trim().toLowerCase();
    $("."+currentFormName+"-form").fadeOut();
    $("."+nextFormName+"-form").fadeIn();
    
    currentBtn.removeClass("select");
    clickedBtn.addClass("select");
    
    
  
    
  });
  
  $(".add-form").submit(function(e){
    e.preventDefault();
    var form = $(this);
    var formData = $(this).serialize();
    var status = $(".select").text().trim().toLowerCase();
    formData+="&status="+status;
    console.log(formData)
    
    $.ajax({
      
      url:"addnewitem.php",
      type:"post",
      data: formData,
      dataType: "text",
      success: function (){
        $(".add-form")[0].reset();
        showNotification(".card-content","success","You have successfuly added an item",true, 7000);
      }
      
      
      
      
    });
    
    
    
  });
  
  
  
  
  $(function(){
    
     $(".search").keyup(function () {
    var searchTerm = $(".search").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
  
$.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
  
   $(".table tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".table tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.table tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
  // $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
  //   $(this).attr('visible','false');
  // });

  // $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
  //   $(this).attr('visible','true');
  // });

  // var jobCount = $('.results tbody tr[visible="true"]').length;
  //   $('.counter').text(jobCount + ' item');

  // if(jobCount == '0') {$('.no-result').show();}
  //   else {$('.no-result').hide();}
		  
    
    
  });
  
  
 function showNotification(element, type, msg, timeout, time){
    $(element).prepend("<div class='alert alert-" + type + " alert-dismissible' role='alert'>" +
          "<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>" +
         msg + "</div>");

    if(timeout === undefined || timeout){
        setTimeout(function(){
            $(".alert").slideUp("slow", function(){
                $(".alert .close").click();
            });
        }, (time === undefined ? 10000 : time));
    }
}
});

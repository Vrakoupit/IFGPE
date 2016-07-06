$(document).ready(function(){       
   var scroll_start = 30;
   var startchange = $('.mainNav');
   var offset = startchange.offset();
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $('.mainNav').css('background-color', '#2B87C4');
       } else {
          $('.mainNav').css('background-color', 'transparent');
       }
   });
});
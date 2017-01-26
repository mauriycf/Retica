$(document).ready(function(){

  $("#banner").css({"height":$(window).height() + "px"});

  var flag = false;
  var scroll;

  $(window).scroll(function(){
    scroll = $(window).scrollTop();

    if(scroll > 80){
      if(!flag){
        $("#logo").css({"margin-top": "-10px", "width": "80px", "height": "60px"});

        $("header").css({"background-color": "#12324f"});
        flag = true;
      }
    }else{
      if(flag){
        $("#logo").css({"margin-top": "10px", "width": "400px", "height": "320px"});

        $("header").css({"background-color": "transparent"});
        flag = false;
      }
    }

  });

});

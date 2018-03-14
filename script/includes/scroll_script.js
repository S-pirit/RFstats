$(document).ready(function(){
    var flag=false;
    var scroll;
    $(window).scroll(function(){
        scroll=$(window).scrollTop();
        
        if(scroll>100)
            {
            if(!flag)
                {
                    $("#card1").css({"width":"150px"});
                    $(".console").css({"width":"0px"});
                    $(".console").css({"visibility":"hidden"})
                    flag=true;
                }
            }
         else
            {
                if (flag)
                {
                    $("#card1").css({"width":"100%"});
                    flag=false;
                }
            }
    });
});
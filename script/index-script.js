$(document).ready(function() {
        $(".cards").on({
                click: function(){
                    $(".cards").css("width","150px");
                    $("#subCard").css({
                        "width":"120px"
                    });
              
                    $(this).css("width","300px");
                    $(this).off("click","**");
                    $(this).off("animate","**");
                    $(this).off("mouseenter","**");
                },
                mouseenter: function(){
                    $(this).css({
                        "width":"250px",
                        "transition-duration":".5s"        
                                })
                },
                mouseleave: function(){
                    $(this).css({
                        "width":"150px",
                        "transition-duration":".9s"
                    })
                    $("#subCard").css({"width": "0px"});
                    //$("#subCard button").css({"width": "0px"});
                }
               
            
        });
    
        $("#subCard").on({
            mouseleave: function(){
                //$("#subCard").css({"width": "0px"})
                
            }
        })
});
        //$(".cards").css("width","150px");
        // $(this).css("width","250px");
        //$(this).animate({ height: '-=00px', width: "-=100px"       
       
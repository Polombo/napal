$(document).ready(function(){

    $("#php").click(function(){
        //$("#phpdesc").show();
        $("#phpdesc").slideDown("slow");
        $("#javadesc").slideUp("slow");
        $("#netdesc").slideUp("slow");
    });
    
    $("#java").click(function(){
        $("#javadesc").slideDown("slow");
        $("#phpdesc").slideUp("slow");
        $("#netdesc").slideUp("slow");
    });
    
    $("#net").click(function(){
        $("#netdesc").slideDown("slow");
        $("#javadesc").slideUp("slow");
        $("#phpdesc").slideUp("slow");
    });   
    
});




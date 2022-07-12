$(document).ready(function(){
    $( ".dialog-confirm" ).hide();
    $(".opener").click(function(){
        $( ".dialog-confirm" ).show();
    });
    $(".dialog-no").click(function(){
        $( ".dialog-confirm" ).hide();
    });
});
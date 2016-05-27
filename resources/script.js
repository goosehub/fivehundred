$(document).ready(function() {

    console.log('hello world');

    hljs.initHighlightingOnLoad();

    setTimeout(function(){
        var syntax_background = $('code').css('background-color');
        $('body').css('background-color', syntax_background);
    }, 100);

    $('form').hide();
    var form_on = false;
    $('body').on('click', '#create', function() {
        if (form_on) {
            form_on = false;
            $('form').hide();
        } else {
            form_on = true;
            $('form').show();
        }
    });

    /* SOMETIMES I LIKE TO LIE ON THE FLOOR AND PRETEND I'M A CARROT */

});
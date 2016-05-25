$(document).ready(function() {
    // Greetings for the curious
    console.log('hello world');

    // Start highlighter
    hljs.initHighlightingOnLoad();

    // Set body background to match syntax with timeout to allow time highlighting to apply
    setTimeout(function(){
        var syntax_background = $('code').css('background-color');
        $('body').css('background-color', syntax_background);
    }, 100);

    // Form logic
    $('form').hide();
    var form_on = false;
    $('body').on('click', '#new', function() {
        if (form_on) {
            form_on = false;
            $('form').hide();
        } else {
            form_on = true;
            $('form').show();
        }
    });

});
$(document).ready(function() {
    console.log('hello world');

    hljs.initHighlightingOnLoad();

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
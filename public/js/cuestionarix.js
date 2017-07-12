$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#sendButton').on('click', function(e) {
        e.preventDefault();
        var options = {
            'preg1': $('input:radio[name=pregunta1]:checked').val(),
            'preg2': $('input:radio[name=pregunta2]:checked').val(),
            'preg3': $('input:radio[name=pregunta3]:checked').val(),
            'preg4': $('input:radio[name=pregunta4]:checked').val(),
            'preg5': $('input:radio[name=pregunta5]:checked').val(),
        };

        console.log(options);

    });
});
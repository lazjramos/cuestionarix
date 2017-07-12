$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#sendButton').on('click', function(e) {
        e.preventDefault();
        var options = {
            'pregunta1': $('input:radio[name=pregunta1]:checked').val(),
            'pregunta2': $('input:radio[name=pregunta2]:checked').val(),
            'pregunta3': $('input:radio[name=pregunta3]:checked').val(),
            'pregunta4': $('input:radio[name=pregunta4]:checked').val(),
            'pregunta5': $('input:radio[name=pregunta5]:checked').val(),
        };

        // Peticion para guardar los resultados
        $.ajax({
            async: true,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            url: 'answers',
            data: 'data=' + JSON.stringify(options),
            success: function(answer) {
                $("ul#answers").append('<li><a href="#" class="answerLink" data-answerid="' + answer.id + '">Intento ' + answer.id + ' <span>' + answer.success + '/5</span></a></li>');
            },
            error: function(MLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    $(document).on('click', '.answerLink', function(e) {
        e.preventDefault();
        var divs = $('.radio');
        $("div.radio").each(function() {
            $(this).css('background-color', '#fff');
        });

        // Peticion para Mostrar los resultados
        $.ajax({
            async: true,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            url: 'answers/corrects',
            data: 'data=' + jQuery(this).data("answerid"),
            success: function(answers) {
                console.log(answers);

                answers.forEach(function(element) {
                    $('input:radio[name=' + element.name + '][value=' + element.true_answer + ']').parent().parent().css('background-color', 'rgb(49, 112, 143)');

                    if (element.true_answer != element.user_answer) {
                        $('input:radio[name=' + element.name + '][value=' + element.user_answer + ']').parent().parent().css('background-color', 'red');
                    }
                });

            },
            error: function(MLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });
});
$(document).ready(function() {
    // Setting up the ajax header.
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Storing data
    $(document).on('click', '#sendButton', function(e) {
        e.preventDefault();
        var divs = $('.radio');
        $("div.radio").each(function() {
            $(this).css('background-color', '#fff');
        });

        // Making the objet to send it.
        var options = {
            'pregunta1': $('input:radio[name=pregunta1]:checked').val(),
            'pregunta2': $('input:radio[name=pregunta2]:checked').val(),
            'pregunta3': $('input:radio[name=pregunta3]:checked').val(),
            'pregunta4': $('input:radio[name=pregunta4]:checked').val(),
            'pregunta5': $('input:radio[name=pregunta5]:checked').val(),
        };

        // validating all options.
        if (options.pregunta1 === undefined || options.pregunta2 === undefined || options.pregunta3 === undefined || options.pregunta4 === undefined || options.pregunta5 === undefined) {
            alert('Debe responder todas las preguntas');
            return false;
        }

        // Request to save the answers.
        $.ajax({
            async: true,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            url: 'answers',
            data: 'data=' + JSON.stringify(options),
            success: function(answer) {
                $("ul#answers").append('<li><a href="#" class="answerLink" data-answerid="' + answer.id + '">Intento ' + answer.id + ' <span>' + answer.success + '/5</span></a></li>');
                $("div#visualizacion").css('display', 'none');
                $('#all-questions').css('display', 'block');
                $('#one-by-one-questions').css('display', 'none');
                $("html, body").animate({ scrollTop: 0 }, "slow");
            },
            error: function(MLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
            }
        });
    });

    // Showing an especific answer
    $(document).on('click', '.answerLink', function(e) {
        e.preventDefault();
        $("div.radio").each(function() {
            $(this).css('background-color', '#fff');
        });

        // Request to show an answer
        $.ajax({
            async: true,
            type: 'POST',
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            url: 'answers/corrects',
            data: 'data=' + jQuery(this).data("answerid"),
            success: function(answers) {
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

    // Show all questions section
    $(document).on('click', '#all-questions-btn', function(e) {
        e.preventDefault();
        $('#all-questions').css('display', 'block');
        $('#one-by-one-questions').css('display', 'none');
    });

    // Show one by one section
    $(document).on('click', '#one-by-one-btn', function(e) {
        e.preventDefault();
        $('#all-questions').css('display', 'none');
        $('#one-by-one-questions').css('display', 'block');
    });

    // Basic setup of Bootstrap Wizard 
    $('#rootwizard').bootstrapWizard();

});
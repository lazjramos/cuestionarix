<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cuestionarix test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-info" id="estadisticas">
                    <div class="panel-heading">
                        <h3 class="panel-title">Estad&iacute;sticas</h3>
                    </div>
                    <div class="panel panel-body">
                        <ul>
                        @foreach($answers as $answer)
                        <li>Intento {{ $answer->id }} <span>4/5</span></li>
                        @endforeach
                            {{-- <li>Intento 1 <span>4/5</span></li>
                            <li>Intento 2 <span>3/5</span></li>
                            <li>Intento 3 <span>2/5</span></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="panel panel-info" id="evaluacion">
                    <div class="panel-heading">
                        <h3 class="panel-title">Evaluaci&oacute;n</h3>
                    </div>
                    <div class="panel panel-body">
                    @foreach($questions as $question)
                        <div class="pregunta">
                            <h4>{{ $question->text }}</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="1" checked>
                                    A) {{ $question->option1 }}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="2">
                                    B) {{ $question->option2 }}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="3">
                                    C) {{ $question->option3 }}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="4">
                                    D) {{ $question->option4 }}
                                </label>
                            </div> 
                        </div> <!-- End Pregunta 1 -->                    
                    @endforeach

                        <div class="">
                            <button type="button" class="btn btn-primary">Finalizar</button>
                        </div>

                    </div> <!-- End Panel Evaluacion -->
                </div>
            </div>
        </div>
    </div>
</body>

</html>
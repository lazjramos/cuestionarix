                    
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cuestionarix test</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="panel panel-info" id="estadisticas">
                    <div class="panel-heading">
                        <h3 class="panel-title">Estad&iacute;sticas</h3>
                    </div>
                    <div class="panel panel-body">
                        <ul id="answers">
                        @foreach($answers as $answer)
                        <li><a href="#" class="answerLink" data-answerId="{{ $answer->id }}">Intento {{ $answer->id }} <span>{{ $answer->success }}/5</span></a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="panel panel-info" id="evaluacion">
                    <div class="panel-heading">
                        <h3 class="panel-title">Evaluaci&oacute;n</h3>
                    </div>
                    <div class="panel panel-body">
                        @if(count($answers) == 0)
                            <div id="visualizacion">
                                <h3>C&oacute;mo quieres listar</h3>

                                <button type="button" class="btn btn-primary" id="all-questions-btn">Todas</button>

                                <button type="button" class="btn btn-success" id="one-by-one-btn">De una a una</button>
                            </div>
                        @endif
                        
                        <div id="all-questions">
                        <form action="#" id="form-questions">
                            @foreach($questions as $question)
                                <div class="pregunta">
                                    <h4>{{ $question->text }}</h4>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="1">
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
                                </div> <!-- End Pregunta  -->                    
                            @endforeach
                            <button type="button" class="btn btn-primary" id="sendButton">Finalizar</button>
                        </form>

                        </div><!-- End .all-question-->

                        <div id="one-by-one-questions" style="display:none">
                        <div id="rootwizard">
                            <div class="navbar">
                            <div class="navbar-inner">
                                <div class="container">
                            <ul>
                                <li><a href="#tab1" data-toggle="tab">Pregunta 1</a></li>
                                <li><a href="#tab2" data-toggle="tab">Pregunta 2</a></li>
                                <li><a href="#tab3" data-toggle="tab">Pregunta 3</a></li>
                                <li><a href="#tab4" data-toggle="tab">Pregunta 4</a></li>
                                <li><a href="#tab5" data-toggle="tab">Pregunta 5</a></li>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <div class="tab-content">
                            @foreach($questions as $question)
                                <div class="tab-pane" id="tab{{$question->id}}">
                                    <div class="pregunta">
                                        <h4>{{ $question->text }}</h4>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="{{$question->name}}" id="{{$question->name}}" value="1">
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
                                    </div> <!-- End Pregunta  -->                    

                                    <button type="button" class="btn btn-primary" id="sendButton">Finalizar</button>

                                </div> <!-- End tab pane -->
                            @endforeach
                                
                                <ul class="pager wizard">
                                    <li class="previous first" style="display:none;"><a href="#">First</a></li>
                                    <li class="previous"><a href="#">Previous</a></li>
                                    <li class="next last" style="display:none;"><a href="#">Last</a></li>
                                    <li class="next"><a href="#">Next</a></li>
                                </ul>
                            </div>
                        </div>                                                        
                        </div><!-- .one-by-one -->
                    </div> <!-- End Panel Evaluacion -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery.bootstrap.wizard.js"></script>
    <script src="js/cuestionarix.js"></script>
</body>

</html>
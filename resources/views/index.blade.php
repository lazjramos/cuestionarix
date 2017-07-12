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
                            <li>Intento 1 <span>4/5</span></li>
                            <li>Intento 2 <span>3/5</span></li>
                            <li>Intento 3 <span>2/5</span></li>
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
                        <div class="pregunta">
                            <h4>Texto de la pregunta 1</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta1Option" id="pregunta1Option1" value="option1" checked>
                                    A) Opci&oacute;n 11
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta1Option" id="pregunta1Option2" value="option2">
                                    B) Opci&oacute;n 12
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta1Option" id="pregunta1Option3" value="option2">
                                    C) Opci&oacute;n 13
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta1Option" id="pregunta1Option4" value="option2">
                                    D) Opci&oacute;n 14
                                </label>
                            </div> 
                        </div> <!-- End Pregunta 1 -->

                        <div class="pregunta">
                            <h4>Texto de la pregunta 2</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta2Option" id="pregunta2Option1" value="option1" checked>
                                    A) Opci&oacute;n 21
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta2Option" id="pregunta2Option2" value="option2">
                                    B) Opci&oacute;n 22
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta2Option" id="pregunta2Option3" value="option2">
                                    C) Opci&oacute;n 23
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta2Option" id="pregunta2Option4" value="option2">
                                    D) Opci&oacute;n 24
                                </label>
                            </div>                         
                        </div><!-- End Pregunta 2 -->

                        <div class="pregunta">
                            <h4>Texto de la pregunta 3</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta3Option" id="pregunta3Option1" value="option1" checked>
                                    A) Opci&oacute;n 31
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta3Option" id="pregunta3Option2" value="option2">
                                    B) Opci&oacute;n 32
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta3Option" id="pregunta3Option3" value="option3">
                                    C) Opci&oacute;n 33
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta3Option" id="pregunta3Option4" value="option4">
                                    D) Opci&oacute;n 34
                                </label>
                            </div>                         
                        </div><!-- End Pregunta 3 -->

                        <div class="pregunta">
                            <h4>Texto de la pregunta 4</h4>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta4Option" id="pregunta3Option1" value="option1" checked>
                                    A) Opci&oacute;n 41
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta4Option" id="pregunta3Option2" value="option2">
                                    B) Opci&oacute;n 42
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta4Option" id="pregunta3Option3" value="option3">
                                    C) Opci&oacute;n 43
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="pregunta4Option" id="pregunta3Option4" value="option4">
                                    D) Opci&oacute;n 44
                                </label>
                            </div>                         
                        </div><!-- End Pregunta 4 -->
                        
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
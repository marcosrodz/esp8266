<html>
    <body>
    <center>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <div class="p-3 mb-2 bg-dark text-white">
        <h2>Projeto esp8266</h2>
    </div>
    <hr/>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-dark text-white" class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><b>REGISTRO DE TEMPERATURA</b></h4>
                </div>
                    <div class="card-body">
                        <form action = "index.php" method = "POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text"><h5>TEMPERATURA</h5></span>
                                <input type="text" name = "temp" class="form-control" placeholder="digite aqui....">
                            </div>
                            <br/><button type = "submit" name = "gravar" class="btn btn-success btn-lg">GRAVAR</button>
                        </form>                        
                        <?php

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center row-cols-1 row-cols-md-2 mb-3 text-center">
        <div class="p-3 mb-2 bg-dark text-white" class="col">
            <div class="p-3 mb-2 bg-secondary text-white" class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="p-3 mb-2 bg-dark text-white" class="my-0 fw-normal"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>&nbsp;&nbsp;<b>Dados:</b></h4>
                </div>
                    <div class="card-body text-start">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Ultima temperatura</th>
                            <th scope="col">Temperatura mínima</th>
                            <th scope="col">Temperatura máxima</th>
                            <th scope="col">Temperatura média</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include 'exibe.php';

                            echo '<br/><br/>';   
                            echo '<tr>';
                            echo '<td>' . $resultadoUltimaTemp['temperatura'] . '</td>';
                            echo '<td>'.$resultadoMin['MIN(temperatura)'] . '</td>';
                            echo '<td>'. $resultadoMax['MAX(temperatura)'] . '</td>';
                            echo '<td>'.$resultadoMedia['AVG(temperatura)'] . '</td>';
                            echo '</tr>';
                            ?>
                        </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/> -->
    </center>
    </body>
    <?php
        if (isset($_POST['gravar'])) {
        $temp = $_POST['temp'];
        $sql = "INSERT INTO `controlador1` (`id`, `data`, `temperatura`) VALUES (NULL, current_timestamp(), '23'), (NULL, current_timestamp(), '$temp');";
        mysqli_query($conn,$sql);
        header("Refresh: 0");
        } else {
        echo "";
        }
    ?>
</html>
<?php
  
        $docStrange2 = [    'title' => "Doctor Strange in The Multiverse of Madness",                                 
                            'year'=> "2022", 
                            'runTime' => "126", 
                            'score' => "74"];
        $morbius =  [ "title" => "Morbius", "year" => "2022", "runTime" => "104", "score" => "17"];
        $spiderManNWH =  [  "title" => "Spider-Man No Way Home", "year" => "2021", "runTime" => "148", "score" => "93"];
        $batman = [ "title" => "The Batman", "year" =>  "2022", "runTime" => "176", "score" => "85"];
        $northman = [ "title" => "The Northman", "year" => "2022", "runTime" => "137", "score" => "89"];
    
        $movies = [
            $docStrange2, 
            $morbius, 
            $spiderManNWH,  
            $batman, 
            $northman
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
    <div class="container">
        <h1 class="h1 text-center mb-3"> Tabela de Filmes</h1>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Título</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Duração (min)</th>
                    <th scope="col">Nota (%)</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?        
                        foreach($movies as $movie) {
                                echo ("<tr>
                                <th scope='row'> </th>
                                <td>{$movie['title']}</td>
                                <td>{$movie['year']}</td>
                                <td>{$movie['runTime']}</td>
                                <td>{$movie['score']}</td>
                            </tr>");
                            } 
                    ?>
                </tbody>
            </table> 
        </div>
    </div>
</body>
</html>

    
    
   

    
    


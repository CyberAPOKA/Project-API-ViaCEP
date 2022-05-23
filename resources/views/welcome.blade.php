<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API ViaCEP</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
 
    <link href="{{asset('style.css')}}" rel="stylesheet"> 
</head>
<body>
    <div class="container">
        <div class="text-center" style="padding-top: 50px;">
            <div>
                <h1>Como usar</h1>
                    <p>Va até a rota
                         <span>/search/local/</span>
                         e passe o cep que deseja, se for mais que um, separe-o por vírgula.
                    </p>
                    <p>
                        <span>Exemplo de 1 CEP apenas:</span>
                        /search/local/95760000
                    </p>
                    <p>
                        <span>Exemplo de vários CEP'S:</span>
                        /search/local/95760000,69907-698,86037480,54756-558
                    </p>
                    <p>
                        <span>NOTA:</span>
                        Você pode passar a url com ou sem hífen (95760000 ou 95760-000)
                    </p>
                    <p>
                        <span>NOTA 2:</span>
                        CEP'S Inválidos e/ou inexistentes retornarão um json null.
                    </p>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <?php
    //Criação de Vetor/Array indexado
    $array = [10, 20, 30, 40];

    //Exibindo o array
    echo "<h1>Array original:</h1> <br>";
    print_r($array); //print_r() exibe o array de forma legivel

    echo "<br>";
    //Adicionando um valor ao final  do array
    $array[] = 50;
    
    //exibindo o array atualizado
    echo "<h2>Array após adicionar 50:</h2><br> ";
    print_r($array);

    echo "<br>";
    //Alterando o valor na posição 1 para 25
    $array[1] = 25;

    //exibindo o array após a alteração
    echo "<h2>Array após alterar o valor na 1 para 25:</h2><br> ";
    print_r($array);

    echo "<br>";
    //Removendo o valor na posição 2
    unset($array[2]);

    //Reorganizando os indices de array
    $array = array_values($array);

    //Exibindo o array após remover o valor
    echo "<h2>Array após remover o valor na posição 2:</h2><br> ";
    print_r($array);

    echo "<br>";
    // adicionando  variops valores 
    echo "<h2>adicionando mais valores:</h2> <br>";
    array_push($array, 60, 3, 22);
    print_r($array);

    echo "<br>";
    //Ordenando o vetor
    sort($array);

    //Exibindo o vetor ordenado
    echo "<h2>Array após ordenar os valores:</h2> <br>";
    print_r($array);

    echo "<br>";
    //Criando um array associativo
    $associativo = [
        "nome" => "José",
        "idade" => 15,
        "cidade" => "São Paulo"
    ];

    //Exibindo o array associativo
    echo "<h2>Array associativo:</h2> ";
    print_r($associativo);

    echo "<br>";
    //Criando um array multidimensional (matrizes)
    $multidimensional = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    //Exibindo o valor ma posição [1][2] 94, 5, 6) -> 6
    echo "<h2>Valor na posição [1][2]</h2> " . $multidimensional[1][2];

    //Função array_merge()
    echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //Mesclando dosi arrays 
    $novo_array = array_merge($array1, $array2);

    //Exibindo o array resultante
    echo "<h2>Array mesclado:</h2><br>";
    print_r($novo_array);

    echo "<br>";
    //função array_search()
    $numeros = [2, 4, 6, 30, 8];

    //procurando o valor 30 no array
    $indice = array_search(30, $numeros);

    //Exibindo o indice onde o valor foi encontardo
    echo "<h2>O índice do valor 30 é: </h2>" . $indice;
    echo "<br>";
    print_r($numeros);

    echo "<br>";
    //Função in_array()
    //Verificando se o valor 25 está no array
    $existe = in_array(25, $numeros);

    //Exibindo se o valor existe ou não
    if($existe) {
        echo "O valor 25 está no array.";
    } else {
        echo "O valor 25 não está no array.";
    }

    ?>
</body>
</html>
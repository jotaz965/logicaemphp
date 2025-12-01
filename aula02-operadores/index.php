<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores</title>
</head>
<body>
    <h1>Operadores</h1>
    <?php 
    //operadores aritmeticos
    $a = 5;
    $b = 3;
    $soma = $a + $b;
    $subtracao = 4 - 2;
    $multiplicacao = 4 * 3;
    $potenciacao = 2 ** 2;
    $divisao = $a / $b;
    $restodivisao = $a % $b;
    echo "resultado da soma é $soma <br>";
    echo "resultado da subtração é $subtracao <br>";
    echo "resultado da multiplicação é $multiplicacao <br>";
    echo "resultado da potenciação é $potenciacao <br>";
    echo "resultado da divisão é $divisao <br>";
    echo "resultado do resto da divisão de $a e $b é $restodivisao <br><br>";

    //Operadores de atribuição
     echo "<h1>Operadores de atribuiçao</h1>";
     $rua = "rua amador bueno";
     $rua .= " na Cidade de São Paulo";

     $preco = 2.45;
     $preco += 2.30;
     $preco -= 1.30;

     //Formata o numero para usar virgula como separador decimal
     $preco_formatado = number_format($preco, 2, ',', '.');
    

     //Exibe o resultado
     echo "$rua, <br> preço R$ $preco_formatado <br>";

     //operadores de comparação
     $c = 10;
     $d = "10";

     echo "<br> <h1> Comparaçao de diferença </h1>";
     echo ($c == $d) ? "São iguais." : "Não são iguais.";
     echo "<br>";
     echo ($c !== $d) ? "São estritamente diferentes." : "Não são  estritamente diferentes.";
    
    $teste = false;
    echo "<br> <h1> Negação </h1>";
    echo(!$teste) ? "É verdadeiro." : "É falso.";

        $e = 5;
        $f = 3;
        echo"<br> <h1> Maior que e menor que </h1>";
        echo ($e > $f)? "E é maior que F." : "E não é maior que F.";
        echo"<br>";
        echo ($e > $f)? "E é menor que F." : "E não é menor que F.";

        $h = 4;
        $i = 4;
        $j = 2;
        echo "<br> <h1> Maior ou Igual a, Menor ou Igual a </h1>";
        echo ($h >= $i) ? "H é maior ou igual a I" : "H não é maior ou igual a I";
        echo "<br>";
        echo ($i <= $j) ? "I é menor ou igual a J" : "I não é menor ou igual a J";

        //operadores logicos
        $idade = 20;
        $tem_cnh = true;

        echo"<br> <h1> Operadores logicos </h1>";   
        echo($idade >= 18 and $tem_cnh) ? "Voce pode dirigir." : "Voce nao pode dirigir.";
        echo "<br>";

        $tem_ingresso = false;
        $tem_convitevip = true;

        echo($tem_ingresso or $tem_convitevip) ? "Voce pode entrar na festa." : "voce nao pode entrar na festa.";
        echo "<br>";

        //&& para and e || para or
        $sol = true;
        $sem_chuva = false;
        $feriado = true;

        echo($sol && $sem_chuva || $feriado) ? "Voce poderia sair para passear." : "melhor ficar em casa";

        $nome = Jose;

        echo "$n"


    ?>
</body>
</html> 
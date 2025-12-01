<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu primeiro php</title>
</head>
<body>
    <h2>
        <?php
             echo "Meu primeiro php \u{1f600}\u{1f4bb}";

             /*
             Isso é um comentario 
             de varias 
             linhas
             */

             //quebra de linha antes do proximo ECHO
             echo "<br> <br>";

             //A variaveis
             $nome = "jose";
             $sobrenome = "oliveira";

             //A variavel pode srer mudada
             $nome = "jose paulo";
             echo "seja bem-vindo, $nome $sobrenome";

             echo "<br> <br>";

             const time = "palmeiras";

             echo "meu time de futebol é ". time;
             echo"<br> <br>";
             echo "seja bem-vindo, $nome $sobrenome seu time é " . time;

             echo "<br> <br>";

             //tipos de dados
             $sobrenome2 = "albuquerque"; //string
             $idade = 45; //int
             $peso = 85.7; //float
             $casado = true; //boolean

             echo "$sobrenome $idade $peso";

             echo "<br> <br>";

             //metodo 1: Usando var_dump para exibir o valor do booleano
             var_dump($casado);
             echo "<br> <br>";

             //metodo 2: Usando uma conversão para string
             echo ($casado ? "casado" : "nao é casado");
             echo "<br> ,<br>";
             var_dump($sobrenome);
             echo "<br>";
             var_dump($idade);
             echo "<br>";
             var_dump($peso);
             echo "<br>";

             $frase = "Meu time de futebol é " .time;
             $frase2 = "meu nome é $nome meu sobrenome é $sobrenome";
             echo($frase);
             echo"<br>";
             echo($frase2);
         ?>

    </h2>
    <p>Meu primeiro Paragrafo</p>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apredendo PHP</title>
    <style>
        p{
            color: pink;
        }
        h1{
            color: purple;
        }
    </style>
</head>
<body>
    <h1> Aprendendo PHP</h1>

    <?php
      echo "Santa Cruz é o melhor do Nordeste"; #Aqui aparece um texto na tela do usuário


    //podemos colocar tags html dentro do PHP
    //p= parágrafo de texto
    //h1= é um título
      echo "<h1>Santa Cruz Futebol Clube</h1>";
      echo "<p> Flavio Caça Rato é melhor do que o CR7</p>";


    //comandos de saída:
    //echo-> imprime uma string na tela
    //print-> imprime uma string na tela
    //print e echo tem a mesma função
      print "<p> Santa melhor time do mundo</p>";


    //Variáveis em PHP
    //sempre iniciam com $ seguido de nome da variável
    //Não é necessário idenificar o tipo de dado
    //Para criar uma variável basta atribuir um valor a ela
     echo "<h1>Informações pessoais:</h1>";
      $Nome = "Lais";
      $Idade = 16;
      $Altura = 1.60;
      echo "$Nome tem $Altura m e $Idade anos de idade<br><br><br>";



    //Aritmética Básica
     echo "<h1>Operadores Aritméticos:</h1>";
     echo "a = 10 e b =5<br>";
      $a = 10;
      $b = 5;
      $c = $a + $b;
      echo "A soma de $a e $b é $c<br>";
      $c = $a - $b;
      echo "A subtração de $a e $b é $c<br>";
      $c = $a * $b;
      echo "A multiplicação de $a e $b é $c<br>";
      $c = $a / $b;
      echo "A divisão de $a e $b é $c<br>";
      $c = $a % $b;
      echo "O resto da divisão de $a e $b é $c<br>";
      $c = $a ** $b;
      echo "A potência de $a e $b é $c<br>";
   

    
    ?>

</body>
</html>
                        <!DOCTYPE html>
                        <html lang="pt-br">
                        <head>
                            <meta charset="UTF-8">
                            <meta http-equiv="X-UA-Compatible" content="IE=edge">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Lista de exercicios2</title>
                        
                        </head>
                        <body>
                            <h1> Nome:Gabriel Bassani da Silva</h1>
                            <h1> 2° Etim info</h1>
                            <br>
                            <br>
                            <h1>Exercicio1</h1>
                                <img src='imgs/exec1.png'>
                            <h1>Exercicio2</h1>
                                <img src="imgs/exec2.png">
                            <h1>Exercicio3</h1>
                                <img src="imgs/exec3.png">
                            <h1>Exercicio4</h1>
                                <?php
                                     $n1 = 6;
                                     $n2 = 2;                      
                                     if($n1 > $n2){
                                        echo "O número ". $n1 . " é maior que " . $n2;
                                        }else{
                                     echo "O número ". $n2 . " é maior que " . $n1;
                                     }
                                     ?>


                            <h1>Exercicio5</h1>

                                <?php

                                    $notas = [3,1,2,4];
                                    $soma = 0;

                                    for($i = 0; $i < count($notas); $i++){
                                    $soma +=$notas[$i];
                                    }
                                    $resultado = $soma / count ($notas);

                                    if($resultado >=7){
                                    echo"Você foi aprovado, parabéns.<br>
                                    Média final".$resultado;
                                    }else{
                                    echo"Você reprovado. <br>
                                    Média final ".$resultado;
                                    }
                                 ?>
                            <h1>Exercicio6</h1>
                                <img src="imgs/exec6.png">
                            <h1>Exercicio7</h1>
                                <?php
                                    $sal = 300;
                                    $salr;
                                    if ($sal <= 300) {
                                    $salr = ($sal * 1.5);
                                    echo "Seu salário foi reajustado 50%,agora seu salário é ", $salr;
                                 } else {
                                    $salr = ($sal* 1.3);
                                 echo "Seu salário foi reajustado 30%,agora seu salário é ", $salr;
                                 }
                                 ?>

                            <h1>Exercicio8</h1>
                                <?php 

                                    $num = 55;

                                    for ($i=0; $i <= $num; $i++) { 
                                
                                        print $i . " ";
                                    }

                                    ?>


                            <h1>Exercicio9</h1>

                                <?php
                                    $num = 7;

                                    if($num > 0){
                                    $valor = $num;
                                 for($i = ($valor - 1); $i > 0; $i--){
                                    $valor = $valor * $i;
                                    }
                                    }else{
                                    $valor = 0;
                                    }

                                    echo "!".$num."="."$valor";
                                 ?>

                            <h1>Exercicio10</h1>
                             <img src="imgs/exec10.png">
                            <h1>Exercicio11</h1>

                                 <?php
                                     $num1 = 9;
                                     $num2 = 3;

                                     echo "(".$num1."*".$num2.")=";
                                     for($num2; $num2 > 0; $num2--){
                                     echo $num1;
                                     if($num2 != 1) echo " + ";   

                                     }
                                                  
                                    ?>
                        </body>
                        </html>
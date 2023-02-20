<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Analise de Aluno</title>
    </head>
    <body>

        <h1>Histórico Escolar de Notas </h1>

        <?php
        //Variaveis 

        $nota1 = 40;
        $nota2 = 50;
        $nota3 = 60;
        $nota4 = 60;
        $media;
        $mediaPonderada;
        $peso1 = 1;
        $peso2 = 2;
        $peso3 = 4;
        $peso4 = 6;

        // Resolvendo 

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        echo"<span style='color:red;'> <strong>A nota media do aluno de acordo com suas notas atuais é :$media</strong></span><br>";
        $mediaPonderada = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4) / ($peso1 + $peso2 + $peso3 + $peso4);
        echo"<span style='color:red;'><strong> A nota Ponderada do Aluno de acordo com os respectivos peso é :</span></strong>" . number_format($mediaPonderada, 1);

        if ($media <=10) {
            echo"<br>Aluno Precisa de melhorar";
        } else {
            if ($media >10 && $media <= 20) {
                echo"<br>Aluno esta quase lá";
            } else {
                if ($media >20 && $media <= 30) {
                    echo"<br>Aluno esta melhorando ";
                } else {
                    if ($media >30 && $media <=50) {
                        echo"<br>Aluno está chegando bem perto do esperado";
                    }
                    if ($media > 50) {
                        echo"<span style='color:blue;'><strong><br>Aluno esta de parabéns</strong></span> ";
                    }
                }
            }
        }
        ?>
    </body>
</html>

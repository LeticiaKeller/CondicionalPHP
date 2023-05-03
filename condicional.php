<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="condicional.css">
    <title>Estrutura Condicional</title>
</head>
<body>
   <div class="container2"> <?php
    $name= $_GET["nome"];
    $Idade= 2023 - $_GET["AnoNasc"];
        if ($Idade < 16){
            $votacao= "Você ainda não vota";
        }
        elseif (($Idade > 16 && $Idade < 18) || ($Idade > 64)){ #feito para ter menos "{}" mas pode ser usado o if separado dentro do else como veremos a seguir.
            $votacao= "O voto é opcional";
        }
        else{
            $votacao= "O voto é obrigatório";
            $dirigir= "você já pode tirar carteira";
        }

    $Media= ($_GET["Primeira"] + $_GET["Segunda"]) / 2;
        if ($Media < 5){
            $aprovacao= "REPROVADO!";
        }
        else{
            if ($Media > 5 && $Media < 7){
                $aprovacao= "de RECUPERAÇÃO!";
            }
            else{
                $aprovacao= "APROVADO!";
            }
        }
    
    echo "<br/>$name, você tem $Idade anos de idade!";
    echo "<br/>$votacao, e $dirigir.";
    echo "<br/> A sua média foi: $Media e você está $aprovacao";
    ?>
    </div>
    <a href="condicional.html"><button>Voltar</button></a>
</body>
</html>
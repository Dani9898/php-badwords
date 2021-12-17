<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>

    <style>
        p {
            width: 300px;
            text-align: center;
        }

    </style>

</head>
<body>

    <?php 

        $testo = "Chi sei, Goku non lo sai Però presto lo scoprirai E poi tu scomparirai. Andrai nell'immensità Laggiù, incontro all'oscurità Finché tutto cambierà. Una nuova realtà Con le sue verità Scaverà nel tuo passato, E guardando più in là Il tuo cuore saprà Ritrovare Dragonball. What is my destiny, Dragonball Io so che tu lo sai, Dragonball Perché non c'è Un drago che Sia grande come te. What is your destiny, Dragonball (what's your destiny) Tu non ce lo dirai, Dragonball (what's my destiny) Ma tornerai E già lo sai Che il buio vincerai";
        $lunghezzaTesto = strlen($testo);

        $parola = $_GET["word"];
        $testoCensurato = str_replace($parola, "***", $testo);
        $lunghezzaTestoCensurato = strlen($testoCensurato);

    ?>

    
    <p>
        Testo non censurato
    </p>

    <p style="color:red;">
        <?php echo $testo?>
    </p>
    <span>La lunghezza del paragrafo è di : <?php echo $lunghezzaTesto?> caratteri</span>

    <form action="" method="get">
        <input type="text" name="word">
        <input type="submit" value="Censura">
    </form>

    <p>
        Testo censurato
    </p>
    <p style="color:red;">
        <?php echo $testoCensurato?>
    </p>
    <span>La lunghezza del paragrafo è di : <?php echo $lunghezzaTestoCensurato?> caratteri</span>

</body>
</html>
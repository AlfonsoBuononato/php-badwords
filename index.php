<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--
    DESCRIZIONE:
    Creare una variabile con assegnato un testo per popolare un paragrafo.
    Visualizzare a schermo il paragrafo.
    Visualizzare a schermo la lunghezza di testo del paragrafo.
    Passare un parametro (query string) nella url chiamato badword con assegnato il valore di una parola scelta da voi, ottenere il suo valore con GET in PHP e sostituire ogni ricorrenza di questa parola, all'interno del testo creato da voi sopra, con tre *.
    Stampare a schermo il paragrafo con il testo censurato. -->

   <?php
   $par = "ciao come ti chiami stai bene ?ciao come ti chiami stai bene ?ciao come ti chiami stai bene ?ciao come ti chiami stai bene ?";
   $length_par = strlen($par);
   $badword = $_GET["badword"];
   $replaced = str_replace($badword, " *** ", $par);
   ?>

   <main><?php echo $par ?> le lettere presenti nel paragrafo sono: <?php echo $length_par ?></main>
   <p><?php echo $replaced ?> le lettere presenti nel paragrafo sono: <?php echo $length_par ?></p>

</body>
</html>
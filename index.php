<?php
$text = $word ? "" : "Paragrafo: " . "Romagna e Sangiovese, sei sempre nel mio cuore. Quest'aria di paese ci invita a far l'amore. La briscola e il tresette, si gioca all'osteria. E col bicchiere in mano si canta in allegria. E quando vien la notte romagnola (Romagnola). La mi' murosa bella e campagnola (Campagnola). Ci invita a far l'amore, l'amor senza pretese. Evviva la Romagna, evviva il Sangiovese. Evviva far l'amore, l'amor senza pretese. Evviva la Romagna, evviva il Sangiovese. E quando vien la notte romagnola (Romagnola). La mi' murosa bella e campagnola (Campagnola). Ci invita a far l'amore, l'amor senza pretese. Evviva la Romagna, evviva il Sangiovese. Mi invita a far l'amore, amor senza pretese. Evviva la Romagna, evviva il Sangiovese";
$text_length = "Lunghezza: " . strlen($text);
$word = $_GET["word"];

$censored_text = $word ? "Testo censurato: " . str_replace($word, "***", $text) : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censura!</title>
</head>
<body>
<h2>Il testo:</h2>
<p><?php echo $text; ?></p>
<p><?php echo $censored_text;?></p>
<p>Lunghezza: <?php echo $text_length; ?></p>

<h2>Come censurare:</h2>
<p> Aggiungi all'URL della pagina "?word=" e subito dopo digita la parola che vuoi censurare. <br />
    Infine, per visualizzare il testo censurato, premi invio o ricarica la sheda del browser. </p>
</body>
</html>
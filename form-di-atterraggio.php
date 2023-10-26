<?php




 
    /*
        Output: il valore è una stringa vuota
    */

// $paragraph = $_GET['paragraph'];
// se il testo non c'è , il testo sarà NO TEXT
// sintassi 1 (con ternario)
$paragraph = !empty($_GET['paragraph']) ? $_GET['paragraph'] : "NO TEXT";
var_dump($paragraph);

// $word = $_GET['word'];
// se la BAD WORD non c'è la parola sarà NO BAD WORD
// sintassi 2 (compatta)
$word = $_GET['word'] ?? "NO BAD WORD";

$stringa_replace = str_replace($word , '***' , $paragraph);

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap cdnj -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <title>Atterraggio form GET</title>
</head>
<body>
  <div class="container my-5 ">
    <div class="row">
      <div class="col-6 text-center">

     <h1>Atterraggio form get</h1>
     <h2>Paragrafo : <?php echo $paragraph ?> Lunghezza: <?php echo strlen($paragraph) ?> caratteri</h2>
     <h3>Bad Word : <?php echo $word ?></h3>

     <h1>Paragrafo reimpostato : <?php echo $stringa_replace ?> Lunghezza: <?php echo strlen($stringa_replace) ?> caratteri</h1>

<!-- 
  Però quanto a te quanto quel che non puoi fare che tu per te qualcosa da poter fare dovrebbe esserci Ma non ti costringerà nessuno pensa da te stesso decidi da te stesso che cosa adesso tu stesso debba fare.
 -->

      </div>
    </div>
  </div>
</body>
</html>
<?php
  // Variabile paragrafo
  $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  //parametro GET per badwords
  $badwords = $_GET["badwords"];

  //sostituzione di una porzione del paragrafo, relativamente alla badwords precedente
  $lorem_badwords = str_replace($badwords, "***", $lorem);

  //lunghezza stringa sostituita
  $lorem_length = strlen($lorem_badwords);
?>

<h1>Badwords</h1>
<h4>CHIAMATA GET: Aggiungi all'url "?badwords=" (senza virgolette) seguito da quale parola vuoi censurare.</h4>

<p>Lunghezza paragrafo: (<?php echo $lorem_length?>) caratteri</p>
<p><?php echo $lorem_badwords?></p>

<?php
  function getFormattedDate() {
    return "Hoje é ".getCurrentDate()." e agora são ".getCurrentTime()."h!";
  }
  
  function getCurrentDate() {
    return date("d/m/y");
  }

  function getCurrentTime() {
    return date("H:i");
  }

  function printALotOfAnimals() {
    $animals = ['Aardvark', 'Abelha', 'Águia', 'Alce'];
    foreach ($animals as $animal) {
      $animalupper = strtoupper($animal);
      echo "<p>{$animalupper}</p>";
    }
  }

  function addReadCounter() {
    $fileName = 'reads.txt';

    $readCount = getReadCount($fileName);
    writeOnFile($fileName, $readCount);
    return $readCount;
  }

  function getReadCount($fileName) {
    $file = fopen($fileName, 'r');
    if ($file == false) {
      createNewFile($fileName);
      $readCount = 1;
    } else {
      $readCount = fgets($file) + 1;
      fclose($file);
    }

    return $readCount;
  }

  function writeOnFile($fileName, $text) {
    $file = fopen($fileName, 'w');
    fwrite($file, $text);
    fclose($file);
  }

  function createNewFile($fileName) {
    $file = fopen($fileName,'w');
    fclose($file);
  }

  function writeOnSession($value) {
    $_COOKIE['value'] = $value;
  }

  function readSession() {
    writeOnSession("Valor salvo nos cookies");
    return $_COOKIE['value'];
  }
?>
<html>
	<head>
		<title>Exercícios: Aula 25/09</title>
		<link rel="stylesheet" type="text/css" href="Styles.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="container">
			<div id="header" >
				<h1>Básico</h1>
			</div>
			<div id="returnButton" class="button" onclick="location.href='index.php';"></div>
			<div id="menuContent">
				<div style="padding: 30px;">
          <h2>Data de hoje</h2>
					<p><?=getFormattedDate()?></p>
				</div>
				<div style="padding: 30px;">
          <h2>Nome de animais em maiusculo</h2>
					<p><?=printALotOfAnimals()?></p>
				</div>
				<div style="padding: 30px;">
          <h2>Número de acessos</h2>
					<p><?=addReadCounter()?></p>
				</div>
				<div style="padding: 30px;">
          <h2>Valor salvo nos COOKIES</h2>
					<p><?=readSession()?></p>
				</div>
			</div>
		</div>
	</body>
</html>
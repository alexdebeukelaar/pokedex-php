<?php


//Has to be 1!
$pokeUserInputID = 1;
$pokeUserInputName = 1;
if (isset($_GET["id"])) {
    $pokeUserInputID = $_GET["id"];
}

if (isset($_GET["name"])) {
    $pokeUserInputName = strtolower($_GET["name"]);



//Fetching the API
$pokeRawData = 'https://pokeapi.co/api/v2/pokemon/' . $pokeUserInputID . $pokeUserInputName;
$evoRawData = file_get_contents($pokeEvoRawData);


$data = file_get_contents($pokeRawData);
$pokeData = json_decode($data, true);



//all variables needed
$pokeName = $pokeData['name'];
$pokeID = $pokeData['id'];
$pokeImage = $pokeData['sprites']['front_default'];

$pokeMove1 = $pokeData['moves'][0]['move']['name'];
$pokeMove2 = $pokeData['moves'][1]['move']['name'];
$pokeMove3 = $pokeData['moves'][2]['move']['name'];
$pokeMove4 = $pokeData['moves'][3]['move']['name'];






?>


<!-- Beginning of the HTML-->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokedex with PHP</title>
    <link rel="stylesheet" href="style/style.css">

</head>


<!-- Structure of the page-->
<body>
    <div class="container">
        <div class="row">
            <div class="column">
            <p><?php echo ($pokeName); ?></p>
                <p><?php echo ($pokeID); ?></p> 
            </div>

            <div class="column">
                <div class="image">
               
                </div>
                <p><?php echo ($pokeMove1); ?></p>
                <p><?php echo ($pokeMove2); ?></p>
                <p><?php echo ($pokeMove3); ?></p>
                <p><?php echo ($pokeMove4); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <form method="get">
                    Pokemon id: <input type="text" name="id">
                    Pokemon name: <input type="text" name="name">
                    <input type="submit">
                </form>
            </div>

        </div>
    </div>



</body>



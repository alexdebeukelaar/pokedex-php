<?php
//Fetching the API
$api_url = 'https://pokeapi.co/api/v2/pokemon/' . $_GET['search'];
$json_data = file_get_contents($api_url);


//all variables needed
$pokemon_name = $pokemon_data['name'];
$pokemon_id = $pokemon_data['id'];
$pokemon_image = $pokemon_data['sprites']['front_default'];
$pokemon_move1 = $pokemon_moves[0]['move']['name'];
$pokemon_move2 = $pokemon_moves[1]['move']['name'];
$pokemon_move3 = $pokemon_moves[2]['move']['name'];
$pokemon_move4 = $pokemon_moves[3]['move']['name']; 

//Displaying the variables
<?php echo $pokemon_name ?>
<?php echo $pokemon_id ?>
<?php echo $pokemon_move1 ?>
<?php echo $pokemon_move2 ?>
<?php echo $pokemon_move3 ?>
<?php echo $pokemon_move4 ?>
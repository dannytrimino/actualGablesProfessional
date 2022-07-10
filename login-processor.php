<?php
$username = $_POST['inputEmail'];
$password = $_POST['inputPassword'];

if($username == 'antilles' && $password == 'ant108') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: antilles.php');
  
} else if($username == 'carlylet' && $password == 'ct7800') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Carlyle Towers', time() + 600);
  setcookie("pageTitle", 'Carlyle Towers Client Center', time() + 600);
  setcookie("imageDirectoryName", 'carlyleTowers', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: carlyletowers.php');
  
} else if($username == 'centurypc1' && $password == 'cp18950') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Century Parc Condominium', time() + 600);
  setcookie("pageTitle", 'Century Parc Condominium Client Center', time() + 600);
  setcookie("imageDirectoryName", 'centuryP1', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: centuryP1.php');
  
} else if($username == 'centurypc2' && $password == 'cp28950') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Century Parc 2 Condominium', time() + 600);
  setcookie("pageTitle", 'Century Parc 2 Condominium Client Center', time() + 600);
  setcookie("imageDirectoryName", 'centuryP2', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: centuryP2.php');
  
} else if($username == 'centurypw' && $password == 'cpw109') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Century Park West', time() + 600);
  setcookie("pageTitle", 'Century Park West Client Center', time() + 600);
  setcookie("imageDirectoryName", 'centuryParkWest', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: centuryParkWest.php');
  
} else if($username == 'costabonita' && $password == 'Welcome123') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Costa Bonita', time() + 600);
  setcookie("pageTitle", 'Costa Bonita Client Center', time() + 600);
  setcookie("imageDirectoryName", 'costaBonita', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: costaBonita.php');
  
} else if($username == 'crestview' && $password == 'cv152') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Crestview', time() + 600);
  setcookie("pageTitle", 'Crestview Client Center', time() + 600);
  setcookie("imageDirectoryName", 'crestview', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: crestview.php');
  
} else if($username == 'enclave' && $password == 'enc300') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'The Enclave at Century HOA', time() + 600);
  setcookie("pageTitle", 'The Enclave at Century HOA Client Center', time() + 600);
  setcookie("imageDirectoryName", 'enclave', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: enclave.php');
  
} else if($username == 'flamingog' && $password == 'fkmg86') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Flamingo Gardens', time() + 600);
  setcookie("pageTitle", 'Flamingo Gardens Client Center', time() + 600);
  setcookie("imageDirectoryName", 'flamingo', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: flamingo.php');
  
} else if($username == 'gables1' && $password == 'gb1370') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Gables I Townhomes', time() + 600);
  setcookie("pageTitle", 'Gables I Townhomes Client Center', time() + 600);
  setcookie("imageDirectoryName", 'gables1', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: gables1.php');
  
} else if($username == 'gablesII' && $password == 'gb28530') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Gables II Townhomes', time() + 600);
  setcookie("pageTitle", 'Gables II Townhomes Client Center', time() + 600);
  setcookie("imageDirectoryName", 'gables2', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: gables2.php');
  
} else if($username == 'galapagos2' && $password == 'gl2111') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Galapagos at Islands Phase II', time() + 600);
  setcookie("pageTitle", 'Galapagos at Islands Phase II Client Center', time() + 600);
  setcookie("imageDirectoryName", 'galapagos2', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: galapagos2.php');
  
} else if($username == 'gardense' && $password == 'gar124') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Garden Estates', time() + 600);
  setcookie("pageTitle", 'Garden Estates Client Center', time() + 600);
  setcookie("imageDirectoryName", 'gardenEstates', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: gardenEstates.php');
  
} else if($username == 'golfview' && $password == 'gv9688') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Golfview Condos', time() + 600);
  setcookie("pageTitle", 'Golfview Condos Client Center', time() + 600);
  setcookie("imageDirectoryName", 'golfview', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: golfview.php');
  
} else if($username == 'hydeparkt' && $password == 'hpt1801') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Hyde Park Towers', time() + 600);
  setcookie("pageTitle", 'Hyde Park Towers Client Center', time() + 600);
  setcookie("imageDirectoryName", 'hydePark', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: hydePark.php');
  
} else if($username == 'internationalp' && $password == 'ip150280') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'International Park I', time() + 600);
  setcookie("pageTitle", 'International Park I Client Center', time() + 600);
  setcookie("imageDirectoryName", 'internationalPark', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: internationalPark.php');
  
} else if($username == 'islamargarita' && $password == 'im115') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Islas Margarita', time() + 600);
  setcookie("pageTitle", 'Islas Margarita Client Center', time() + 600);
  setcookie("imageDirectoryName", 'islaMargarita', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: islaMargarita.php');
  
} else if($username == 'keybiscayne' && $password == 'keyb100') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Key Biscayne 100', time() + 600);
  setcookie("pageTitle", 'Key Biscayne 100 Client Center', time() + 600);
  setcookie("imageDirectoryName", 'keyBiscayne100', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: keyBiscayne100.php');
  
} else if($username == 'madeira' && $password == 'noMoreGames!@#') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Madeira at Islands at Doral', time() + 600);
  setcookie("pageTitle", 'Madeira at Islands at Doral Client Center', time() + 600);
  setcookie("imageDirectoryName", 'madeira', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: madeira.php');
  
} else if($username == 'mendozav' && $password == 'mzv115') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Mendoza Village', time() + 600);
  setcookie("pageTitle", 'Mendoza Village Client Center', time() + 600);
  setcookie("imageDirectoryName", 'mendoza', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: mendoza.php');
  
} else if($username == 'midwayg' && $password == 'mdg7&8') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: midway.php');
  
} else if($username == 'mystic1' && $password == 'mf1119') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Mystic Forest', time() + 600);
  setcookie("pageTitle", 'Mystic Forest Client Center', time() + 600);
  setcookie("imageDirectoryName", 'mysticForest', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: mysticForest.php');
  
} else if($username == 'parkeast' && $password == 'pe87ave') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Park East', time() + 600);
  setcookie("pageTitle", 'Park East Client Center', time() + 600);
  setcookie("imageDirectoryName", 'parkEast', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: parkEast.php');
  
} else if($username == 'polynesian' && $password == 'poly113') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Polynesian at Islands', time() + 600);
  setcookie("pageTitle", 'Polynesian at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'polynesian', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: polynesian.php');
  
} else if($username == 'silvercrest' && $password == 'silverc159') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Silvercrest', time() + 600);
  setcookie("pageTitle", 'Silvercrest Client Center', time() + 600);
  setcookie("imageDirectoryName", 'silvercrest', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: silverCrest.php');
  
} else if($username == 'tsanderling' && $password == 'tsdapts') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'The Sanderling', time() + 600);
  setcookie("pageTitle", 'The Sanderling Client Center', time() + 600);
  setcookie("imageDirectoryName", 'sanderling', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: sanderling.php');
  
} else if($username == 'tuscanyp' && $password == 'tpv3040') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Tuscany Pointe Villas', time() + 600);
  setcookie("pageTitle", 'Tuscany Pointe Villas Client Center', time() + 600);
  setcookie("imageDirectoryName", 'tuscanyPointe', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: tuscanyPointe.php');
  
} else if($username == 'vilasolc' && $password == 'vsc7744') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: vilasol.php');
  
} else if($username == 'vilazuls' && $password == 'vlz7228') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: vilazul.php');
  
} else if($username == 'villazamora' && $password == 'vzac118') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: villazamora.php');
  
} else if($username == 'warehouse' && $password == 'twh75') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Antilles at Islands', time() + 600);
  setcookie("pageTitle", 'Antilles at Islands Client Center', time() + 600);
  setcookie("imageDirectoryName", 'antilles', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: warehouse.php');
  
} else if($username == 'centuryserena' && $password == 'csl139179') {
  setcookie('name', $username, time() + 600);
  setcookie('navBarName', 'Century Serena Lakes Townhomes', time() + 600);
  setcookie("pageTitle", 'Century Serena Lakes Townhomes', time() + 600);
  setcookie("imageDirectoryName", 'centurySerena', time() + 600);
  setcookie("notify", 'There are no announcements at this time', time() + 600);
  header('Location: centurySerena.php');
  
}  else {
    echo "Incorrect login information. Please press the back button on your browser and try again.";
}


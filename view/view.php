<?php
  $fleur = isset($_GET['fleur']) ? $_GET['fleur'] : "rose";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../img/icones/fleur.ico" rel="icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="../eCommerce/css/stylesDivers.css">
    <link rel="stylesheet" type="text/css" href="../eCommerce/css/stylesBaniere.css">
    <link rel="stylesheet" type="text/css" href="../eCommerce/css/stylesMenu.css">
    <link rel="stylesheet" type="text/css" href="../eCommerce/css/stylesGalerie.css">
        <title><?php echo $pagetitle; ?></title>
    </head>
    <body>
    	<header>
        <div id="baniere">
            <img class="img_baniere" alt="baniere" src="../eCommerce/img/baniere/baniere1.jpg">
        </div>
        <nav>
          <ul>
            <li><a href="index.php?controller=accueil&action=readAll">Accueil</a></li>
            <li><a href="index.php?controller=fleur&action=readAll">Produits</a></li>
            <li><a href="index.php?controller=utilisateur&action=readAll">Utilisateurs</a></li>
            <li><a href="index.php?controller=contact&action=readAll">Contact</a></li>
            <li><a href="index.php?controller=fleur&action=printPanier">Panier</a></li>
            <?php if(!isset($_SESSION['login'])){echo "<li><a href=\"index.php?controller=utilisateur&action=connect\">Se connecter</a></li>";} ?>
            <?php if(isset($_SESSION['login'])){echo "<li><a href=\"index.php?controller=utilisateur&action=deconnect\">Se deconnecter</a></li>";} ?>
          </ul>
        </nav>
      </header>
		<?php
		// Si $controleur='voiture' et $view='list',
		// alors $filepath="/chemin_du_site/view/voiture/list.php"
		$filepath = File::build_path(array("view", $controller, "$view.php"));
		require $filepath;
		?>
		<footer>
        <p style="border: 1px solid black;">PHP 2020</p>
        <p style="border: 1px solid black;">Site E-Commerce de Floralys</p>
      </footer>
    </body>
</html>
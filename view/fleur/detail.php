<?php
	$g1=$v->get('variete');
	$g2=$v->get('couleur');
	$g3=$v->get('prix');
	$g4=$v->get('id');
	$g11=htmlspecialchars($g1);
	$g21=htmlspecialchars($g2);
	$g31=htmlspecialchars($g3);
	$g22=rawurlencode($g4);
	$f=$g1.$g2;

    echo "<p> La fleur de la variété $g11, à la couleur $g21 coûte $g31 € </p>";
    if(Session::is_admin()){
        echo "<a href='index.php?controller=fleur&action=delete&id=$g22'>		supprimer </a>";
        echo "<a href='index.php?controller=fleur&action=update&id=$g22'>		modifier</a>";
    }
    echo "<img class='img_galerie' src='../eCommerce/img/fleurs/$g1/$f.jpg' />";
    echo "<div><a href='index.php?controller=fleur&action=ajouterArticle&id=$g22'> Ajouter au panier </a></div>";

?>
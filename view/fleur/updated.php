<?php
$tab_f=ModelFleur::getAllFleurs();
echo "<p>La $f[0] de couleur $f[1]  a bien été modifié.</p>";
require File::build_path(array("view","fleur","list.php"));
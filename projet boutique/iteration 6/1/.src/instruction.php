<?php

if (!isset($_SESSION['step'])) {
    $_SESSION['step'] = 1;
}
if ($_SESSION['step'] === 1) {
    $_SESSION['instruction'] = 'Afficher le refrain de la chanson.';
} elseif ($_SESSION['step'] === 2) {
    $_SESSION['instruction'] = 'Afficher le titre, le refrain et l\'auteur de la chanson.';
} elseif ($_SESSION['step'] === 3) {
    $_SESSION['instruction'] = 'Afficher la chanson avec le refrain et les couplets. Attention le refrain n\'est présent qu\'une seule fois dans le tableau';
} elseif ($_SESSION['step'] >= 4) {
    $_SESSION['instruction'] = 'Afficher la chanson avec le refrain et les couplets. Attention le tableau a changé';
}


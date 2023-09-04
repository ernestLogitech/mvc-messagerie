<?php
 
$post = [
    'titre' => 'Un faux titre.',
    'date_creation_fr' => '03/03/2022 à 12h14min42s',
    'contenu' => "Le faux contenu de mon billet.\nC'est fantastique !",
];
$comments = [
    [
        'author' => 'Un premier faux auteur',
        'date_creation_fr' => '03/03/2022 à 12h15min42s',
        'comment' => 'Un faux commentaire.\n Le premier.',
    ],
    [
        'author' => 'Un second faux auteur',
        'date_creation_fr' => '03/03/2022 à 12h16min42s',
        'comment' => 'Un faux commentaire.\n Le second.',
    ],
];
 
require('templates/post.php');
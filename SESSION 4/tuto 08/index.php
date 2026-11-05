
<?php

$articles = [
    [
        'id' => 1,
        'titre' => 'Introduction au développement web',
        'categorie_libelle' => 'Développement',
        'categorie_couleur' => 'bleu',
        'contenu' => 'Découvrez les bases du développement web avec HTML, CSS et JavaScript.',
        'date_creation' => '2026-11-01'
    ],

    [
        'id' => 2,
        'titre' => 'Les principes du UI/UX Design',
        'categorie_libelle' => 'UI/UX Design',
        'categorie_couleur' => 'rose',
        'contenu' => 'Apprenez les principes essentiels du design et de l’expérience utilisateur.',
        'date_creation' => '2026-11-02'
    ]
];

require 'index-template.php';

?>

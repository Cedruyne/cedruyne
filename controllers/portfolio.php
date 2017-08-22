<?php
// On demande les cinq derniers projets au modéle.
include_once(realpath('models/portfolio/get_projects.php'));
$projects = get_projects(0,5);


// On sécurise l'affichage
foreach ($projects as $i => $project)
{
    $projects[$i]['pName'] = htmlspecialchars($project['pName']);
    $projects[$i]['pDescription'] = nl2br(htmlspecialchars($project['pDescription']));
    $projects[$i]['iAlt'] = htmlspecialchars($project['iAlt']);
}


$cover = 'worksCover';
$view = 'portfolio';

// Appel de la vue.
include 'views/layout.html.php';
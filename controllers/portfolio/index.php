<?php
// On demande les cinq derniers projets au modéle.
include_once(realpath('models/portfolio/get_projects.php'));
$projects = get_projects(0,5);

// On sécurise l'affichage
foreach ($projects as $i => $project)
{
    $projects[$i]['name'] = htmlspecialchars($project['name']);
    $projects[$i]['description'] = nl2br(htmlspecialchars($project['description']));
}

<?php

include_once(realpath('app/pdo.php'));

function get_projects($offset, $limit)
{
    global $pdo;
    $offset = (int) $offset;
    $limit = (int) $limit;

    $query = $pdo->prepare(
        ' SELECT id, name, description, DATE_FORMAT(record_date, \'%d/%M/%Y\') AS date_creation_fr
                    FROM portfolio
                    LIMIT :offset, :limit'
    );
    $query->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query->execute();
    $projects = $query->fetchAll();

    return $projects;
}
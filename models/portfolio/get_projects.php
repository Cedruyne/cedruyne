<?php

include_once(realpath('app/pdo.php'));

function get_projects($offset, $limit)
{
    global $pdo;
    $offset = (int) $offset;
    $limit = (int) $limit;
    // ANY_VALUE() Fix SQL error due sql_mode=only_full_group_by, MYSQL 5.7 : https://lc.cx/cBGq
    $query = $pdo->prepare(
        ' SELECT p.id, p.name AS pName, p.description AS pDescription, DATE_FORMAT(p.record_date, \'%d/%M/%Y\') AS pCreationDateFR, 
                    p.url AS pURL, i.id, i.alt AS iAlt, i.portfolio_id, i.src AS iSrc, GROUP_CONCAT(t.name) AS technologies
                    FROM portfolio AS p
                    INNER JOIN images AS i ON (p.id = i.portfolio_id)
                    INNER JOIN portfolioTechnology AS pt ON (p.id = pt.portfolio_id)
                    INNER JOIN technology AS t ON (t.id = pt.technology_id)
                    GROUP BY p.id
                    ORDER BY pCreationDateFR DESC 
                    LIMIT :offset, :limit'
    );
    $query->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query->bindParam(':limit', $limit, PDO::PARAM_INT);
    $query->execute();
    $projects = $query->fetchAll();

    return $projects;
}
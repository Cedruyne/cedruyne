<?php

$pdo = new PDO
(
    'mysql:host=YOUR_HOST; dbname=YOUR_DB; charset=UTF8',
    'USERNAME',
    'PASSWORD',

//  ERRMODE_EXCEPTION: pour facilement déboguer
//  PDO::FETCH_ASSOC: retourne un tableau indexé par le nom de la colonne
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
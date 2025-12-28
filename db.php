<?php
$pdo = new PDO(
    "mysql:host=sql12.freesqldatabase.com;dbname=sql12813112;charset=utf8mb4",
    "sql12813112",
    '8rzl7jfIW1',
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);

// $pdo = new PDO(
//     "mysql:host=localhost;dbname=api_for_teaching;charset=utf8mb4",
//     "root",
//     "",
//     [
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//         PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
//     ]
// );
<?php
$pdo = new PDO(
    "mysql:host=sql.freedb.tech;port=3306;dbname=freedb_student_api;charset=utf8mb4",
    "freedb_Kimsor",
    '$DRXMrMuUQNXW8E',
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
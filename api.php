<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");

require "db.php";

$method = $_SERVER["REQUEST_METHOD"];

/* ======================
   GET: Fetch Students
====================== */
if ($method === "GET") {
    $stmt = $pdo->query("SELECT * FROM students");
    echo json_encode($stmt->fetchAll());
    exit;
}

/* ======================
   POST: Add Student
====================== */
if ($method === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $pdo->prepare(
        "INSERT INTO students (name,email,gender,dob,image)
         VALUES (?,?,?,?,?)"
    );
    $stmt->execute([
        $data["name"],
        $data["email"],
        $data["gender"],
        $data["dob"],
        $data["image"]
    ]);

    echo json_encode(["message" => "Student added"]);
    exit;
}

/* ======================
   PUT: Update Student
====================== */
if ($method === "PUT") {
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $pdo->prepare(
        "UPDATE students
         SET name=?, email=?, gender=?, dob=?, image=?
         WHERE id=?"
    );
    $stmt->execute([
        $data["name"],
        $data["email"],
        $data["gender"],
        $data["dob"],
        $data["image"],
        $data["id"]
    ]);

    echo json_encode(["message" => "Student updated"]);
    exit;
}

/* ======================
   DELETE: Delete Student
====================== */
if ($method === "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);

    $stmt = $pdo->prepare("DELETE FROM students WHERE id=?");
    $stmt->execute([$data["id"]]);

    echo json_encode(["message" => "Student deleted"]);
    exit;
}

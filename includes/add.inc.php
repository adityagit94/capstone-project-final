<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $name = $_POST["name"];
    $location = $_POST["location"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];
    $job = $_POST["job"];

    try {
        require_once "db.inc.php";

        $query = "INSERT INTO jobs (name,location,phone,message,job) VALUES
        (?,?,?,?,?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$name,$location,$phone,$message,$job]);

        $pdo = null;
        $stmt = null;
        header("Location:../worker_.php");
        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


}
else
{
    header("Location:../event.php");
}

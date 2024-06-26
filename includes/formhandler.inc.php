<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $username = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pincode = $_POST["pincode"];
    $role_name = $_POST["role"];

    try {
        require_once "db.inc.php";

        $query = "INSERT INTO users (username,email,pwd,pincode,role_name) VALUES
        (?,?,?,?,?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username,$email,$pwd,$pincode,$role_name]);

        $pdo = null;
        $stmt = null;
        header("Location:../login.php");
        die();

    } catch (PDOException $e) {
        die("Query failed: ". $e->getMessage());
    }


}
else
{
    header("Location:../register.php");
}
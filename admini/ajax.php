<?php
include_once 'model/database.php';
session_start();


if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
 
    if (!$email && !$password) {
        header('Location:views/login.php?empty');
    } else {
        

        // Prepare the SQL statement with placeholders
        $query = "SELECT * FROM user WHERE name = :email  AND password = :password";
        $stmt = $pdo->prepare($query);

        // Bind values to the named placeholders
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        // Execute the prepared statement
        $stmt->execute();
       

        
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['name'] = $user['name'];
        $_SESSION['user_id'] = $user['user_id'];
      
       
        if ($user) {
            
        header('Location:index.php');
        } else {
    echo "<script>alert('something wrong')</script>";
            header('Location:login.php?loginE');
        }
    }
}
?>
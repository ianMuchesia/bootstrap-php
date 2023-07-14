

<?php
include_once 'model/database.php';

session_start();
if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $userQuery = "SELECT * FROM user WHERE user_id = :user_id";
    $stmt = $pdo->prepare($userQuery);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
  
    if (!$user) {

        header('Location: login.php');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}


$room_name = filter_input(INPUT_POST, 'room_name', FILTER_SANITIZE_SPECIAL_CHARS);
$area = filter_input(INPUT_POST, 'area', FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$quantity = filter_input(INPUT_POST, 'quantity', FILTER_VALIDATE_INT);
$adult = filter_input(INPUT_POST, 'adult', FILTER_VALIDATE_INT);
$children = filter_input(INPUT_POST, 'children', FILTER_VALIDATE_INT);
$room_no = filter_input(INPUT_POST, 'room_no', FILTER_SANITIZE_SPECIAL_CHARS);















 require("views/header.php");

$action =  filter_input(INPUT_POST, 'action', FILTER_SANITIZE_SPECIAL_CHARS);

if (!$action) {
    $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!$action) {
        $action = 'settings';
    }
}





switch ($action) {
    case "settings":
        require_once("views/settings.php");
        break;

    case "features":
        require_once("views/features.php");
        break;
    case "user_queries":
        require_once("views/user_queries.php");
        break;
    case "rooms":
        require_once("views/rooms.php");
        break;

    case "carousel":
        require_once("views/carousel.php");
        break;

    case "add_room":
        $imageData = $_FILES['image']['tmp_name'];
        print_r([$room_name,  $area, $children + $adult,$quantity, $imageData]);
  
         
        require_once("views/rooms.php");
        break;
    default:

        require_once("views/dashboard.php");
}

require("views/footer.php") ?>
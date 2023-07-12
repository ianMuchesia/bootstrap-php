

<?php require("views/header.php");

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
    default:

        require_once("views/dashboard.php");
}

require("views/footer.php") ?>
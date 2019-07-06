<?php
include_once 'Board.php';

// If this is create request
if (isset($_POST['createNewBoard'])) {
    $boardName = $_POST['boardName'];
    $description = $_POST['description'];

    $board = new Board();
    $board->saveData($boardName, $description);
}
?>
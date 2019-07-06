<?php include_once 'Board.php' ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Memo System | Boards</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="">
            <div class="navbar-brand text-white nav-title">My Memo System</div>
        </a>
    </nav>

    <!-- Container -->
    <div class="container">
        <div class="row">
            <h1 class=col-3>Boards</h1>
            <div class="col-7"></div>
            <div class="col-2 d-flex align-items-end"><a href="">+ Create New Board</a></div>
        </div>
        <div class="row">

            <!-- Get all the board record -->
            <?php
                $boards = Board::getAllBoards();
            ?>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($boards as $board) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $board['id']; ?></th>
                            <td><?php echo $board['name']; ?></td>
                            <td><?php echo $board['description']; ?></td>
                            <td>
                                <a>Edit</a>
                                <a>Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
<?php 
    require_once 'src/service/GameSrvc.php'; // Include the GameSrvc.php file
    
    // Create an instance of the GameSrvc class
    $gameService = new GameSrvc;
    
    // Retrieve all games
    $games = $gameService->getAllGames();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="src/assets/css/style.css">
<script type="text/javascript" src="src/assets/js/collection.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Game</title>
</head>
<body>
    <h2>Add New Game</h2>
    <form id="gameForm" method="post" action="">
    <div class="form-control">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required><br><br>
    </div> 
    <div class="form-control">
        <label for="publisher">Publisher:</label>
        <input type="text" id="publisher" name="publisher" required><br><br>
    </div>
        <label for="rating">Rating:</label>
        <input type="text" id="rating" name="rating" required><br><br>
    </div>
    <div class="form-control">
        <label for="players">Number of Players:</label>
        <input type="number" id="players" name="players" required><br><br>
</div>
        
        <button type="submit">Add Game</button>
    </form>

    <h1>List of Games</h1>
    <table border="1" class="list" id="gameTableBody">
        <tr>
            <th>Title</th>
            <th>Publisher</th>
            <th>Rating</th>
            <th># of Players</th>
        </tr>
        
        <?php
        // Iterate through the $games array to display each game
        foreach ($games as $game): ?>
            <tr>
                <td><?php echo $game['title']; ?></td>
                <td><?php echo $game['publisher']; ?></td>
                <td><?php echo $game['rating']; ?></td>
                <td><?php echo $game['players']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

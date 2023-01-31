<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title ?></title>
    <link href="../Controller/CSS/global.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1>Collection</h1>
<h1>Games</h1>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GitDatabase";

session_start();

$id = "";
$_SESSION["idUser"] = $id;
$_SESSION["username"] = $username;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM game";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<form action='' method='post'>";
    echo "<table><tr><th>Select</th><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td><input type='checkbox' name='selected_game[]' value='" . $row["idGame"] . "'></td><td>" . $row["idGame"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
    echo "<input type='submit' name='submit' value='Submit'>";
    echo "</form>";
} else {
    echo "0 results";
}

if (isset($_POST['submit'])) {
    $selected_game = $_POST['selected_game'];
    $user_id = $_SESSION['idUser'];
    $username = $_SESSION['username'];

    if (!empty($selected_games)) {
        foreach ($selected_games as $selected_game) {
            $game_info_sql = "SELECT * FROM game WHERE idGame = $selected_game";
            $game_info = $conn->query($game_info_sql)->fetch_assoc();

            $description = $game_info["description"];
            $price = $game_info["price"];

            $sql = "INSERT INTO selected_games (idUser, username, game, description, price) VALUES ('" . $_SESSION['idUser'] . "', '" . $_SESSION['username'] . "', '$selected_game', '" . $row['description'] . "', '" . $row['price'] . "')";
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
$conn->close();


?>
<form action="add_game_vue.php">
    <input type="submit" value="AddGame">
</form>
<form action="library_vue.php">
    <input type="submit" value="Return">
</form>

</body>
</html>

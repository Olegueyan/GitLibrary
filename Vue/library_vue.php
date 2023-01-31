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
<h1>Library</h1>

<h3>User Infos</h3>

<table>
    <ul><?php echo $id_user_info?></ul>
    <ul><?php echo $pseudo_info?></ul>
    <ul><?php echo $email_info?></ul>
</table>


Nothing Ahah

<h1>Games</h1>
Hey that your games ! If you don't have any game here, you can go in the collection to chose one ! enjoy.

<?php
if(isset($_POST['submit'])) {
    $selected_games = $_POST['selected_games'];

    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "GitDatabase";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM selected_game";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<form action='' method='post'>";
        echo "<table><tr><th>Select</th><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr><td><input type='checkbox' name='selected_games[]' value='" . $row["idUser"] . "'></td><td>" . $row["game"]. "</td><td>" . $row["description"]. "</td><td>" . $row["price"]. "</td></tr>";
        }
        echo "</table>";
        echo "<input type='submit' name='submit' value='Submit'>";
        echo "</form>";
    } else {
        echo "0 results";
    }

    $selected_games_str = implode(',', $selected_games);
    $sql = "SELECT * FROM game WHERE game_id IN ($selected_games_str)";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Description</th><th>Price</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["idGame"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["price"]. "</td></tr>";
        }
        echo "</table>";
    }
    $conn->close();
}
?>

<form action="../Vue/Collection_vue.php">
    <input type="submit" value="ChoseGame">
</form>

</body>
</html>

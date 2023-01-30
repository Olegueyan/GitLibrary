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
<h1>AddGame</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GitDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idGame = $_POST["idGame"];
    $name = $_POST["name"];
    $description = $_POST["description"];
    $price = $_POST["price"];

    $sql = "INSERT INTO game (idGame, name, description, price) VALUES ('$idGame','$name', '$description', '$price')";

    if ($conn->query($sql) === TRUE) {
        echo "New game created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}


$conn->close();
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="idGame">ID:</label>
    <input type="text" name="idGame">
    <br><br>
    <label for="name">Name:</label>
    <input type="text" name="name">
    <br><br>
    <label for="description">Description:</label>
    <input type="text" name="description">
    <br><br>
    <label for="price">Price:</label>
    <input type="text" name="price">
    <br><br>
    <input type="submit" value="Submit">
</form>

<form action="../Vue/Collection_vue.php">
    <input type="submit" value="Return">
</form>

</body>
</html>
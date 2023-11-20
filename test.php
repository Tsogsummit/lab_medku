<html>
<head>
    <title>Test</title>
</head>
<body>
<?php
$servername = "localhost";
$conn = new mysqli($servername, 'root', '', 'mydatabase');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    if (isset($_POST['submit'])) {
        if(isset($_POST['first_selection'])) {
            $selectedItemId = $_POST['first_selection'];

            $sql = "SELECT * FROM `first_selection` WHERE `id` = '$selectedItemId'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();

                $sql = "INSERT INTO `second_selection`(`name`) VALUES ('" . $row['name'] . "')";
                $conn->query($sql);

                $sql = "DELETE FROM `first_selection` WHERE `id` = '$selectedItemId'";
                $conn->query($sql);
            }
        }
    }
    echo "First selection";
    $sql = "SELECT * FROM `first_selection`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<form method='post' action='test.php'>";
        echo "<select name='first_selection'>";
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
        echo "<input type='submit' name='submit' value='submit'>";
        echo "</form>";
    }

    echo "Second selection";

    $sql = "SELECT * FROM `second_selection`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<select name='second_selection'>";
        while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
        }
        echo "</select>";
    }
}
?>
</body>
</html>

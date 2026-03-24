<?php
// Establish connection to database
$db_host = "localhost";
$db_user = "username";
$db_password = "password";
$db_name = "database_name";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from database
$sql = "SELECT * FROM table_name";
$result = mysqli_query($conn, $sql);

// Display data in a table
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Action</th></tr>";
while ($row = mysqli_fetch_assoc($result)) {
  echo "<tr>";
  echo "<td>" . $row['id'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td><form method='POST' action=''>
        <input type='hidden' name='id' value='" . $row['id'] . "'>
        <input type='submit' name='delete' value='Delete'>
        </form></td>";
  echo "</tr>";
}

echo "</table>";

// Delete record from database
if (isset($_POST['delete'])) {
  $id = $_POST['id'];
  $sql = "DELETE FROM table_name WHERE id='$id'";
  if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  }
}

// Close connection
mysqli_close($conn);
?>
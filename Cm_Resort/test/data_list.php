<?php
require_once('credentials.php');

              $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
              
              if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
              echo "Connected successfully";
             
              $sql = "SELECT * FROM reservation_data";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result) > 0) {
                  echo '<table>';
                  echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>MiddleInitial</th><th>Email</th><th>MobileNumber</th><th>ReservationDate</th><th>Note</th><th>Action</th></tr>';
                  
                  while ($row = mysqli_fetch_array($result)) {
                      echo '<tr>';
                      echo '<td>' . $row["id"] . '</td>';
                      echo '<td>' . $row["firstname"] . '</td>';
                      echo '<td>' . $row["lastname"] . '</td>';
                      echo '<td>' . $row["middleinitial"] . '</td>';
                      echo '<td>' . $row["email"] . '</td>';
                      echo '<td>' . $row["mobilenumber"] . '</td>';
                      echo '<td>' . $row["reservationdate"] . '</td>';
                      echo '<td>' . $row["note"] . '</td>';
                      echo "<td><form method='POST' action=''>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <input type='submit' name='delete' value='Delete'>
                            </form></td>";
                      echo '</td>';
                      echo '</tr>';
                  }
                }

                        echo "</table>";
                        
                        if (isset($_POST['delete'])) {
                        $id = $_POST['id'];
                        $sql = "DELETE FROM reservation_data WHERE id='$id'";
                        if (mysqli_query($conn, $sql)) {
                            echo "Record deleted successfully";
                        } else {
                            echo "Error deleting record: " . mysqli_error($conn);
                        }
                        }
                        
                        mysqli_close($conn);
                  
?>
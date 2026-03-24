<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    header('Location: ./administrator.php#data-list');
    exit;

}
?>
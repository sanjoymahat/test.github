<?php
include('php_files/config.php');
if (isset($_POST['user_view'])) {
    $id = mysqli_real_escape_string($conn, $_POST['user_view']);
    $sql = "SELECT f_name, l_name, username, email, mobile, address, city, user_role FROM user WHERE user_id='{$id}'"; // Corrected SQL query
    $result = mysqli_query($conn, $sql) or die("user_view query failed:" . mysqli_error($conn));
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
    exit;
}
if (isset($_POST['status_id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $status_id = mysqli_real_escape_string($conn, $_POST['status_id']);
    if ($status_id == '1') {
        $sql = "UPDATE user SET user_role='0' WHERE user_id='{$id}'"; // Corrected SQL query
    } else {
        $sql = "UPDATE user SET user_role='1' WHERE user_id='{$id}'"; // Corrected SQL query
    }
    $response = mysqli_query($conn, $sql) or die("user_status query failed:" . mysqli_error($conn));
    if ($response) {
        echo json_encode(['success' => 'success']); // Corrected JSON format
    }
}
?>

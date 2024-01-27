<?php
include 'config.php';
$output = "";

$limit = 10;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$offset = ($page - 1) * $limit;
$sql = "SELECT * FROM user ORDER BY user_id DESC LIMIT {$offset}, {$limit}";
$result = mysqli_query($conn, $sql) or die('query failed:' . mysqli_error($conn));

if (mysqli_num_rows($result) > 0) {
    $output .= "<thead>
        <tr>
            <th>SL NO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>CITY</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>";
    $serial = $offset + 1;
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr>
                <td class='id'>$serial</td> 
                <td>{$row['f_name']}  {$row['l_name']}</td>
                <td>{$row['username']}</td>
                <td>{$row['mobile']}</td>
                <td>{$row['city']}</td>
                <td>
                    <a href='#user_view' class='user-view btn btn-xs btn-primary' data-toggle='modal'>
                        <i class='material-icons update' data-toggle='tooltip' 
                        data-id='{$row['user_id']}'
                        title='Edit'><i class='fa fa-eye'></i></i>
                    </a>
                    <a href='#user_update' class='user-view btn btn-xs btn-success' data-toggle='modal'>
                        <i class='material-icons update' data-toggle='tooltip'  data-id='{$row['user_id']}'   title='Edit'><i class='fa fa-edit'></i></i>
                    </a>";

        if ($row['user_role'] == '1') {
            $output .= " <a href='#status_id' class='btn btn-xs btn-info ' data-id='{$row['user_id']}' data-status='{$row['user_role']}'>Block</a>";
        } else {
            $output .= "  <a href='#status_id' class='btn btn-xs btn-secondary user-status' data-id='{$row['user_id']}' data-status='{$row['user_role']}'>Unblock</a>";
        }

        $output .= " <a href='#deleteEmployeeModal' class='btn btn-xs btn-danger delete_user' data-id='{$row['user_id']}' data-toggle='modal'><i class='material-icons' data-toggle='tooltip' 
                        title='Delete'><i class='fa fa-trash'></i></i></a>   
                    </td>
                </tr>";
        $serial++;
    }
    $output .= "</tbody>";
    echo $output;
} else {
    echo 'No results found';
}

// // show pagination
// $sql1 = "SELECT * FROM user ";
// $result1 = mysqli_query($conn, $sql1) or die('query failed:' . mysqli_error($conn));
// if (mysqli_num_rows($result1) > 0) {
//     $total_record = mysqli_num_rows($result1);
//     $total_page = ceil($total_record / $limit);
//     $output .= "<ul class='pagination'>";
//     if ($page > 1) {
//         $output .= "<li><a class='page-link' href='users.php?page=" . ($page - 1) . "'>Prev</a></li>";
//     }
//     for ($i = 1; $i <= $total_page; $i++) {
//         $active = ($i == $page) ? "active" : "";
//         $output .= "<li class='$active'><a class='page-link' href='users.php?page=$i'>$i</a></li>";
//     }
//     if ($total_page > $page) {
//         $output .= "<li><a class='page-link' href='users.php?page=" . ($page + 1) . "'>Next</a></li>";
//     }
//     $output .= "</ul>";
//     echo $output;
// }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>ADMIN</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900|Montserrat:400,500,700,900" rel="stylesheet">
        <link type="text/s"
        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Jquery textEditor -->
        <link rel="stylesheet" href="css/jquery-te-1.4.0.css">
        <!-- Custom stlylesheet -->
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <!-- HEADER -->
        <div id="admin-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-offset-8 col-md-2">
                        <div class="dropdown">
                            <a href="" class="dropdown-toggle logout" data-toggle="dropdown">
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="change_password.php">Change Password</a></li>
                                <li><a href="php_files/logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /HEADER -->
        <div id="admin-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- Menu Bar Start -->
                    <div class="col-md-2 col-sm-3" id="admin-menu">
                         <ul class="menu-list">
                            <li> <a href="dashboard.php">Dashboard</a></li>
                            <li><a href="products.php">Products</a></li>
                            <li ><a href="category.php">Categories</a></li>
                            <li><a href="sub_category.php">Sub-Categories</a></li>
                            <li> <a href="brands.php">Brands</a></li>
                            <li> <a href="orders.php">Orders</a></li>
                            <li> <a href="users.php">Users</a></li>
                            <li><a href="options.php">Options</a></li>
                        </ul>
                    </div>
                    <!-- Menu Bar End -->
                    <!-- Content Start -->
                    <div class="col-md-10 col-sm-9 clearfix" id="admin-content">

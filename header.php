<!-- Header -->
<!DOCTYPE html>
<html>
<head>
    <title>FaceClone</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <!-- nav -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php if(isset($_SESSION['user_username'])){?>profile.php?username=<?php echo $_SESSION['user_username'];} else {?>index.php<?php } ?>">FaceClone</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="home.php">Home</a></li>
                <li><a href="profile.php?username=<?php echo $_SESSION['user_username']?>">Profile</a></li>
                <li><a href="php/logout.php">Logout</a>
            </ul>
        </div>
    </nav>
    <!-- ./nav -->
    


<html>
<head>
    <title>ShareBoard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ShareBoard</a>

        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>

            <?php else : ?>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
        <?php endif; ?>
        </ul>

    </nav>

    <div class="container">
        
        <div class="row">
            <?php require($view); ?>
        </div>
    
    </div><!-- /.container -->
</body>
</html>
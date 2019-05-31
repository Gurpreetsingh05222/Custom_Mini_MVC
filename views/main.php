<html>
<head>
    <title>ShareBoard</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">ShareBoard</a>

        <ul class="navbar-nav mr-auto">
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
        </ul>

        <ul class="navbar-nav navbar-right">
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
            <li><a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
        </ul>

    </nav>

    <div class="container">
        
        <div class="row">
            <?php require($view); ?>
        </div>
    
    </div><!-- /.container -->
</body>
</html>
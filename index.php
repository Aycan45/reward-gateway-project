<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>eCard sending system</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">eCards sender</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">eCards</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Send</a>
        </li>
            <?php 
                if (isset($_SESSION['email'])) {

            ?>
            <li class="nav-item">
                <a class="nav-link" href="#"><?php echo $_SESSION['email'];?></a>
                <a class="nav-link" href="./logout.php">Logout</a>
            </li>
            <?php 
                }
                else 
                {
            ?>
             <li class="nav-item">
                <a class="nav-link" href="./register.html">Register</a>
                <a class="nav-link" href="./login.html">Log in</a>
            </li>
            <?php 
                }
            ?>
        </ul>
    </div>
    </nav>
</body>
</html>
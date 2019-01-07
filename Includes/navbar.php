<?php
    include('PHP/titleinf.php');
    echo $backgroundcolor;
?>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand text-white" href="index.php">4 op 'n rij</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php
        if(isset($_SESSION['loggedin'])){
echo'
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' .
$_SESSION["username"] .
'
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
<a class="dropdown-item" href="index.php">Home</a>
<a class="dropdown-item" href="PHP/logout.php">Uitloggen</a>
</div>
</li>';
        }
        else{
            echo'
        <li class="nav-item">
            <a class="nav-link text-white" href="login.php">Inloggen</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="register.php">Registreren</a>
        </li>';
        }
        ?>
        </ul>
    </div>
    </nav>
<?php
$pagetitle = "Endgame";
include('Includes/head.php');
include('Includes/navbar.php');
include('PHP/requirelogin.php');
?>

<div class="board">
    <form id="gameform" action="PHP/positionhandler.php" method="POST">
    <?php
        include('PHP/endgamescript.php');
        echo "Gefeliciteerd " . $_SESSION['playerturnname'] . " heeft gewonnen";
        ?>
    </form>
</div>

<?php
include('Includes/footer.php');
?>
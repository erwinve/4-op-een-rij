<?php
$pagetitle = "Ingame";
include('Includes/head.php');
include('Includes/navbar.php');
include('PHP/requirelogin.php');
?>

<div class="board">
    <form id="gameform" action="PHP/positionhandler.php" method="POST">
    <?php
        include('PHP/gamescript.php');
    ?>
        <input type='hidden' id='inputcircle' name='circleposition' value="NULL">
    </form>
</div>

<?php
include('Includes/footer.php');
?>
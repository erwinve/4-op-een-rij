<?php
$pagetitle = "Ingame";
include('Includes/head.php');
include('Includes/navbar.php');
?>

<div class="board">
    <form id="gameform" action="PHP/positionhandler.php" method="POST">
    <?php
        include('PHP/gamescript.php');
    ?>
    </form>
</div>

<?php
include('Includes/footer.php');
?>
<?php
$pagetitle = "Home";
include('Includes/head.php');
include('Includes/navbar.php');
?>
<div class="headerwrap">
    <div class="container text-center headerpad">
        <h1 class="display-2">4 op 'n rij</h1>
        <p class="lead">Speel tegen je vrienden</p>
    </div>
</div>

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">


			<!-- Row -->
			<div class="row">


				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-gamepad"></i>
						<h3>Start met spelen!</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="pregame.php">Speel!</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-user-friends"></i>
						<h3>Vrienden</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="friends.php">Vrienden</a>
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
                    <i class="fas fa-sign-in-alt"></i>
						<h3>Inloggen</h3>
						<p>Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero sit amet.</p>
						<a href="#">Read more</a>
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->


<?php
include('Includes/footer.php');
?>
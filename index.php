<?php require_once("includes/header.php"); ?>
				
<div class="videoSection">
	<?php

	$subscriptionsProvider = new SubscriptionsProvider($con, $userLoggedInObj);
	$subscriptionVideos = $subscriptionsProvider->getVideos();


	$videoGrid = new VideoGrid($con, $userLoggedInObj->getUsername());

	if(User::isLoggedIn() && sizeof($subscriptionVideos) > 0) {
		echo $videoGrid->create($subscriptionVideos, "Subscriptions", false);
	}

	echo $videoGrid->create(null, "Recommended", false);
	// echo date("Y-m-d H:i:s");
	?>
	
</div>










<!-- <?php
//Test to see if user logged in
// if(isset($_SESSION["userLoggedIn"])) {
// 	echo "user is logged in as " . $userLoggedInObj->getName();

// }
// else {
// 	echo "not logged in";
// }


?> -->

	



<?php require_once("includes/footer.php"); ?>
			
<?php
	require_once "stripe-php-master/init.php";
	require_once "products.php";

	$stripeDetails = array(
		"secretKey" => "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",
		"publishableKey" => "pk_live_51KXNZpLzOmJMllI2wJ71CNzyVKw959V0q1ZZZGNRnibtvVVmwzzQ6RfAMUpBB44hQ430ldLyHpQgDkezKSL3YY5800sVKb9atj"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>

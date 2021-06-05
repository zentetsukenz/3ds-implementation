<?php

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Omise.js Pre-Built Form & Omise-PHP : 3-D Secure Implementation</title>
</head>

<body>
	<div>
		<form id="checkoutForm" method="POST" action="/checkout.php">
			<input type="hidden" name="omiseToken">
			<input type="hidden" name="omiseSource">
			<button type="submit" id="checkoutButton">Pay</button>
		</form>

		<script type="text/javascript" src="https://cdn.omise.co/omise.js">
		</script>

		<script>
			OmiseCard.configure({
				publicKey: "<?php echo $_ENV['OMISE_PUBLIC_KEY']; ?>"
			});

			var button = document.querySelector("#checkoutButton");
			var form = document.querySelector("#checkoutForm");

			button.addEventListener("click", (event) => {
				event.preventDefault();
				OmiseCard.open({
					amount: 10000,
					currency: "THB",
					defaultPaymentMethod: "credit_card",
					onCreateTokenSuccess: (nonce) => {
						if (nonce.startsWith("tokn_")) {
							form.omiseToken.value = nonce;
						} else {
							form.omiseSource.value = nonce;
						};
						form.submit();
					}
				});
			});
		</script>
	</div>
</body>

</html>
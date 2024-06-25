<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../css/welcom.css" />
		<title>Page d'accueil</title>
	</head>
	<body>
		<main class="main" id="main">
			<nav>
				<p class="logo"><img src="{{ asset('images/uta.jpeg') }}" id="arrowUp" alt=""  /></p>
				<ul>
					<li><a href="#">Acceuil</a></li>
					<li><a href="{{ route('login') }}">Se conecter</a></li>
					<li><a href="{{ route('register') }}">S'inscrire</a></li>
				</ul>
			</nav>

			<div class="info">
				<div class="overlay"></div>
				<div id="circle">
					<div class="feature camera">
                        <p>Bienvenue sur notre page!</p>
					</div>
				</div>
			</div>

			<div class="controls">
				<img src="{{ asset('images/uta_home.jpg') }}" id="arrowUp" alt="" width="600" height="500" />
			</div>
		</main>

		<script>
			const circle = document.getElementById('circle');
			const btnUp = document.getElementById('arrowUp');
			const btnDown = document.getElementById('arrowDown');
			let currentRotateValue = circle.style.transform;
			let clickRotateSum;

			btnUp.onclick = () => {
				clickRotateSum = currentRotateValue + 'rotate(-90deg)';
				circle.style.transform = clickRotateSum;
				currentRotateValue = clickRotateSum;
			};

			btnDown.onclick = () => {
				clickRotateSum = currentRotateValue + 'rotate(90deg)';
				circle.style.transform = clickRotateSum;
				currentRotateValue = clickRotateSum;
			};
		</script>
	</body>
</html>
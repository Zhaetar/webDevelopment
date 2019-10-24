	<html>
	<head>
		<title>Exercícios: Formularios</title>
		<link rel="stylesheet" type="text/css" href="Styles.css">
		<meta charset="UTF-8">
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Formularios</h1>
			</div>
			<div id="returnButton" class="button" onclick="location.href='index.php';"></div>
			<div id="content">
				<div id="form" class="content">
					<form class="flexColumn" action="FormAction.php" method="post">
						<fieldset>
							<legend>Nome</legend>
							<div style="display: flex">
								<input class="input" type="input" name="name"></input>
							</div>
						</fieldset>
						<fieldset>
							<legend>E-mail</legend>
							<div style="display: flex">
								<input class="input" type="e-mail" name="email"></input>
							</div>
						</fieldset>
						<fieldset>
							<legend>Senha (Ao menos 5 caracteres, precisa conter um número e uma letra maiúscula)</legend>
							<div style="display: flex">
								<input class="input" type="password" name="password"></input>
							</div>
						</fieldset>
						<fieldset>
							<legend>Animais que você gosta</legend>
							<div class="flexColumn">
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="raposa"></input>
									<legend>Raposa</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="camundongo"></input>
									<legend>Camundongo</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="pinguim"></input>
									<legend>Pinguim</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="lontra"></input>
									<legend>Lontra</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="esquilo"></input>
									<legend>Esquilo</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox" name="animal[]" value="peixeboi"></input>
									<legend>Peixe-boi</legend>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Se você pudesse ser um animal, qual seria?</legend>
							<div class="flexColumn">
								<div class="flexRow">
									<input type="radio" name="animal2"></input>
									<legend>Águia</legend>
								</div>
								<div class="flexRow">
									<input type="radio" name="animal2"></input>
									<legend>Chinchilla</legend>
								</div>
								<div class="flexRow">
									<input type="radio" name="animal2"></input>
									<legend>Orca</legend>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Cite um exemplo de como reduzir a utilização de plásticos não reutilizaveis</legend>
							<div class="flexRow">
								<textarea class="input" name="plastic" style="width: 100%; height: 75px"></textarea>
							</div>
						</fieldset>
						<input class="button small" style="margin-bottom: 10px;" type="reset">
						<input class="button small" type="submit">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
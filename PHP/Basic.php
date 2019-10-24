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
			<div id="returnButton" class="button" onclick="location.href='index.html';"></div>
			<div id="content">
				<div id="form" class="content">
					<form class="flexColumn">
						<fieldset>
							<legend>Seu nome</legend>
							<div style="display: flex">
								<input class="input" type="input"></input>
							</div>
						</fieldset>
						<fieldset>
							<legend>Um segredo</legend>
							<div style="display: flex">
								<input class="input" type="password"></input>
							</div>
						</fieldset>
						<fieldset>
							<legend>Animais que você gosta</legend>
							<div class="flexColumn">
								<div class="flexRow">
									<input id="animal1" type="checkbox"></input>
									<legend for="animal1">Raposa</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox"></input>
									<legend>Camundongo</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox"></input>
									<legend>Pinguim</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox"></input>
									<legend>Lontra</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox"></input>
									<legend>Esquilo</legend>
								</div>
								<div class="flexRow">
									<input type="checkbox"></input>
									<legend>Peixe-boi</legend>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Se você pudesse ser um animal, qual seria?</legend>
							<div class="flexColumn">
								<div class="flexRow">
									<input type="radio"></input>
									<legend>Águia</legend>
								</div>
								<div class="flexRow">
									<input type="radio"></input>
									<legend>Chinchilla</legend>
								</div>
								<div class="flexRow">
									<input type="radio"></input>
									<legend>Orca</legend>
								</div>
							</div>
						</fieldset>
						<fieldset>
							<legend>Descreva o que afetou sua escolha na pergunta acima</legend>
							<div class="flexRow">
								<textarea class="input" style="width: 100%; height: 75px"></textarea>
							</div>
						</fieldset>
						<fieldset>
							<legend>A raposa pertence a qual familia biológica?</legend>
							<select style="margin: 10px 0px;">
							  <option value="ailuridae">Ailuridae</option>
							  <option value="amphicyonidae">Amphicyonidae</option>
							  <option value="canidae">Canidae</option>
							  <option value="phocidae">Phocidae</option>
							</select>
						</fieldset>
						<fieldset>
							<legend>Quais dos seguintes animais brasileiros estão em extinção?</legend>
							<select multiple style="margin: 10px 0px;">
							  <option value="ararajuba">Ararajuba</option>
							  <option value="arara">Arara-azul</option>
							  <option value="ariranha">Ariranha</option>
							  <option value="baleia">Baleia-franca</option>
							  <option value="gato">Gato-maracajá</option>
							  <option value="cervo">Cervo-do-pantanal</option>
							  <option value="macaco">Macaco-aranha</option>
							  <option value="mico">Mico-leão-dourado</option>
							  <option value="onca">Onça-pintada</option>
							  <option value="tartaruga">Tartaruga-oliva</option>
							</select>
						</fieldset>
						<input class="button small" style="margin-bottom: 10px;" type="reset">
						<input class="button small" type="submit">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
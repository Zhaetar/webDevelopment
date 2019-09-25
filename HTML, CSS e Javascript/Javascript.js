function toggleCase() {
  var documents = [
    document.getElementById("name-input"),
    document.getElementById("address-input"),
    document.getElementById("email-input")
  ]

  if (document.getElementById("casetoggle").checked) {
    documents.forEach(toUpperCase);
  } else {
    documents.forEach(toLowerCase);
  }
}

function toLowerCase(element) {
  element.style.textTransform = 'lowercase';
}

function toUpperCase(element) {
  element.style.textTransform = 'uppercase';
}

function alertName() {
  var weekDay = getWeekday();
  var date = getDate();
  var name = getName();
  var greeting = getGreeting();

  if (name) {
    alert(greeting + ", " + name + "! Hoje é " + weekDay + ", " + date);
  } else {
    alert("Por favor preencha seu nome!");
  }
}

function getWeekday() {
  var currentDate = new Date();
  var weekday = [
    "domingo",
    "segunda-feira",
    "terça-feira",
    "quarta-feira",
    "quinta-feira",
    "sexta-feira",
    "sábado",
  ]

  return weekday[currentDate.getDay()]
}

function getDate() {
  var currentDate = new Date();
  var dd = String(currentDate.getDate()).padStart(2, '0');
  var mm = String(currentDate.getMonth() + 1).padStart(2, '0');
  var yyyy = currentDate.getFullYear();

  var today = mm + '/' + dd + '/' + yyyy;
  return today;
}

function getGreeting() {
  var currentDate = new Date();
  var currentTime = currentDate.getHours();
  if (currentTime > 6 && currentTime < 12) {
    return "Bom dia";
  } else if (currentTime > 12 && currentTime < 18) {
    return "Boa tarde";
  } else if (currentTime > 18 && currentTime < 0) {
    return "Boa noite";
  }

  return "Boa madrugada";
}

function getName() {
  return document.getElementById('name-input').value;
}

function getRandomAnimalName() {
  var animals = [
    'Aardvark', 'Abelha', 'Águia', 'Alce', 'Andorinha', 'Anta', 'Antílope', 'Aranha', 'Ave-lira', 'Avestruz	Babuíno', 'Baleia', 'Barata', 'Bisão', 'Boi', 'Borboleta', 'Búfalo Africano', 'Búfalo Americano', 'Burro	', 'Cabra', 'Cação', 'Camelo', 'Canguru', 'Cão', 'Caracol', 'Caranguejo', 'Carneiro', 'Castor', 'Cavalo', 'Cefo', 'Chacal', 'Chimpanzé', 'Cisne', 'Cobra', 'Coelho', 'Coiote', 'Cormorão', 'Coruja', 'Corvo', 'Corvo', 'Cotovia', 'Crocodilo', 'Cudu', 'Doninha', 'Dragão-de-Komodo', 'Dugongo', 'Elefante', 'Enguia', 'Équidnas', 'Esquilo', 'Estrela-do-mar', 'Falcão', 'Foca', 'Formiga', 'Frango', 'Fuinha', 'Furão	Gaivota', 'Ganso', 'Garça-real', 'Gato', 'Gauro', 'Gazela', 'Gerbilo', 'Girafa', 'Gnu', 'Golfinho', 'Gorila', 'Guanaco', 'Guaxinim	Hamster', 'Hiena', 'Hipopótamo', 'Iaque', 'Iguana', 'Jacaré', 'Jaguar', 'Javali	Kouprey	Lagarta', 'Lagarto', 'Lagosta', 'Leão', 'Leão do Mar', 'Lebre', 'Lémure', 'Leopardo', 'Lhama', 'Libélula', 'Lobo', 'Lontra', 'Loris', 'Lula', 'Macaco', 'Medusa', 'Morcego', 'Morsa', 'Mosca', 'Mosquito', 'Mula', 'Musaranho',	'Naja',	'Ocapi', 'Órix', 'Ostra', 'Ouriço', 'Ovelha	Panda gigante', 'Panda vermelho', 'Pantera', 'Papa-formigas', 'Pato', 'Pato-real', 'Pavão', 'Pega', 'Peixe-boi', 'Pelicano', 'Perdiz', 'Perú', 'Piolho', 'Pomba', 'Pombo', 'Pónei', 'Porco', 'Porco-espinho', 'Porquinho-da-índia', 'Puma', 'Raposa', 'Ratazana', 'Rato', 'Rena', 'Rinoceronte', 'Rouxinol', 'Salamandra', 'Sapo', 'Serpente', 'Suricata	Tarsius', 'Tartaruga', 'Tatu', 'Tentilhão', 'Texugo', 'Tigre', 'Toupeira', 'Tubarão	Uapiti', 'Urso	 ', 'Veado', 'Vespa', 'Vespão', 'Vison'
  ];

  alert(animals[Math.floor(Math.random()*animals.length)]);
}
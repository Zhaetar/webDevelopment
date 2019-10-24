<?php

$error = "Nenhum erro detectado";

try {
    validateEmptyFields();
    validatePassword();
    validateEmail();
} catch (Exception $e) {
    $error = $e->getMessage();
}

// Implementar
function validateLogin() {
    $userN = $_POST['user-name'];
    $passW = $_POST['pass-word'];

    $userlist = file ('users.txt');
    
    $email = "";
    $company = "";
    
    $success = false;
    foreach ($userlist as $user) {
        $user_details = explode('|', $user);
        if ($user_details[0] == $userN && $user_details[1] == $passW) {
            $success = true;
            $email = $user_details[2];
            $company = $user_details[3];
            break;
        }
    }
    
    if (!$success) {
        throw new Exception("Sua senha e login não foram encontrados no sistema. Por favor, tente novamente!");
    }
}

function validatePassword() {
    $password = $_POST['password'];

    if (strlen($password) <= 5) {
        throw new Exception("Sua senha precisa conter ao menos 5 caracteres!");
    } elseif (!preg_match("#[0-9]+#", $password)) {
        throw new Exception("Sua senha precisa conter um número!");
    } elseif (!preg_match("#[A-Z]+#", $password)) {
        throw new Exception("Sua senha precisa conter uma letra maiúscula!");
    }
}

function validateEmail() {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Formato de e-mail inválido!");
    }
}

function validateEmptyFields() {
    // Nome do campo => Descrição do erro
    $requiredFields = [
        'name' => "o seu nome",
        'email' => "o seu e-mail",
        'password' => "a sua senha",
        'animal' => "o animal (checkbox)",
        'animal2' => "o animal (radio)",
        'plastic' => "o texto sobre plástico",
    ];
    
    foreach ($requiredFields as $key => $field) { 
        if (!isset($_POST[$key]) || empty($_POST[$key])) {
            throw new Exception("Você não preencheu {$field}!");
        }
    }
}
?>

<html>
<body>
<?= $error ?>
</body>
</html>
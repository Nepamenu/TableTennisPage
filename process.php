<?php

function cleanInput($input)
{
    // pavojingu simboliu panaikinimas
    $input = htmlspecialchars($input);
    // nuimti tuscius tarpus is abieju pusiu
    $input = trim($input);
    return $input;
}

$name = $phone = $stalas = $body = '';
$nameErr = $phoneErr = $stalasErr = '';

// prisijungiu prie DB==============================================
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'rezervacijaDB';

$feedback = '';
$connection = new mysqli($host, $user, $password, $db);

if ($connection->connect_error) {
    die('Connection failed: ' . $connection->connect_error);
} else {
    $feedback = 'Connected successfully';
}



// tikriname ar forma issiusta POST budu
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // NAME VALIDATION=================================
    if (empty($_POST["name"])) {
        $nameErr = "Prašau įrašykite savo vardą";
    } else {
        $name = cleanInput($_POST['name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Prašome vardui naudokite tik raides";
        }
    }



    // PHONE VALIDATION=================================
    if (empty($_POST['phone'])) {
        $phoneErr = " Prašau įveskite telefono numerį";
    } else {
        $phone = cleanInput($_POST['phone']);
        // if (!filter_var($phone, "[0-9]{11}" arba FILTER_SANITIZE_NUMBER_INT )) {
        //     $phoneErr = " Neteisingai įvestas numeris";
        // }
    }

    // STALAS VALIDATION=================================
    if (empty($_POST['stalas'])) {
        $stalasErr = 'Prašau pasirinkite stalą';
    } else {
        $stalas = cleanInput($_POST['stalas']);
    }

    $body = cleanInput($_POST['body']);





    if (isset($_POST['submit'])) {

        if (empty($nameErr)) {
            //redirect;
            header('Location: ./success.php?name= ' . $name . ', uzsakytas stalas ' . $stalas);
            // jei viskas ok prisijungiu prie DB ir irasau rezervacijos duomenis=============
            $sqlInsert = "INSERT INTO `rezervacija` (`name`, `phone`, `tableNr`, `body`) VALUES ('$name', $phone, '$stalas', '$body')";
            if ($connection->query($sqlInsert) === true) {
                showFeedback('rezervacija ikelta i DB');
            } else {
                showFeedback('Klaida: ikelti nepavyko');
            }
        }
    }
};



// irasymas i DB===========

function showFeedback($msg)
{
    echo "<p class='feedback'> $msg </p>";
}


// sukuriu lentele sql=============================================
$sql = "CREATE TABLE rezervacija(
id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
name VARCHAR(30) NOT NULL,
phone VARCHAR(11) NOT NULL,
tableNr VARCHAR(10),
body TEXT
)";

// if ($connection->query($sql) === true) {
//     showFeedback('Lentele sekmingai sukurta');
// } else {
//     showFeedback('Klaida: lenteles sukurti nepavyko');
// }

// lentele DB sukurta


// DB lenteles pildymas is formos lauku====================================

// $name = $phone = $stalas = $body = '';

// if ($_SERVER['REQUEST_METHOD'] === "POST") {
//     die('method post');
//     $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
//     $phone = filter_input($_POST['phone'], FILTER_SANITIZE_STRING);
//     $stalas = ($_POST['stalas']);
//     $body = htmlspecialchars($_POST['body']);
// }

// if (empty($name) && empty($phone) && empty($stalas)) {
//     showFeedback('Klaida: nesupildyti formos laukai');
// } else {

// if (isset($_POST['submit'])) {
//     $sqlInsert = "INSERT INTO `rezervacija` (`name`, `phone`, `tableNr`, `body`) VALUES ('$name', $phone, '$stalas', '$body')";
//     if ($connection->query($sqlInsert) === true) {
//         showFeedback('rezervacija ikelta i DB');
//     } else {
//         showFeedback('Klaida: ikelti nepavyko');
//     }
// }


$connection->close();

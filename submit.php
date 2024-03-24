<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Procesare formular de contact</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Verificăm dacă toate câmpurile sunt completate
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Aici poți adăuga logica pentru trimiterea e-mailului sau salvarea datelor într-o bază de date
        
        // Exemplu de afișare a datelor trimise
        echo "<h2>Mulțumim pentru mesaj, $name!</h2>";
        echo "<p>Email: $email</p>";
        echo "<p>Mesaj: $message</p>";
    } else {
        echo "<h2>Eroare: Toate câmpurile sunt obligatorii!</h2>";
    }
} else {
    echo "<h2>Eroare: Metoda de acces nepermisă!</h2>";
}
?>

</body>
</html>

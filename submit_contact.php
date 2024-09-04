<?php
// Odbieranie danych z formularza
$name = $_POST['name'];
$email = $_POST['email'];

// Walidacja danych (opcjonalne)
if (empty($name) || empty($email)) {
    die('Uzupełnij wszystkie pola!');
}

// Zapis do pliku tekstowego
$file = fopen("contacts.txt", "a");  // Otwiera plik w trybie dodawania
fwrite($file, "Imię: " . $name . "\nEmail: " . $email . "\n\n");  // Zapisuje dane
fclose($file);  // Zamykamy plik

// Wysłanie emaila
$to = "twoj-email@example.com";  // Zastąp swoim adresem email
$subject = "Nowa wiadomość od: " . $name;
$message = "Imię: " . $name . "\nEmail: " . $email;
$headers = "From: webmaster@example.com";  // Zastąp swoim adresem email

mail($to, $subject, $message, $headers);

// Przekierowanie użytkownika na stronę podziękowania
header("Location: thanks.html");
exit();
?>

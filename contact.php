<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // קבלת הנתונים מהטופס
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // טיפול בבקשה (למשל שליחת אימייל)
    $to = 'your-email@example.com'; // כתובת המייל שאליה תישלח ההודעה
    $subject = 'הודעה חדשה דרך האתר';
    $messageContent = "שם: $name\nאימייל: $email\nטלפון: $phone\n\nהודעה:\n$message";

    // שליחת המייל
    $headers = 'From: ' . $email . "\r\n" .
               'Reply-To: ' . $email . "\r\n" .
               'Content-Type: text/plain; charset=UTF-8' . "\r\n";

    if (mail($to, $subject, $messageContent, $headers)) {
        echo 'ההודעה נשלחה בהצלחה!';
    } else {
        echo 'נכשל בשליחת ההודעה. אנא נסה שוב מאוחר יותר.';
    }
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // קבלת הנתונים מהטופס
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // טיפול בבקשה (למשל שליחת אימייל)
    $to = 'your-email@example.com'; // כתובת המייל שאליה תישלח ההודעה
    $subject = 'הודעה חדשה דרך האתר';
    $messageContent = "שם: $name\nאימייל: $email\nטלפון: $phone\n\nהודעה:\n$message";

    // שליחת המייל
    if (mail($to, $subject, $messageContent)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>

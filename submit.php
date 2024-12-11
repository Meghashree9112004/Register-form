<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    echo "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Registration Successful</title>
        <style>
            body {
                font-family: 'Times New Roman', Times, serif;
                background-image: url('background.jpg'); /* Replace with your image path */
                background-size: cover; /* Ensures the image covers the full screen */
                background-repeat: no-repeat; /* Prevents the image from repeating */
                background-attachment: fixed; /* Keeps the image fixed during scrolling */
                margin: 0;
                padding: 0;
                color: #333;
                text-align: center;
            }
            .success-container {
                margin: 50px auto;
                padding: 30px;
                background: rgba(255, 255, 255, 0.8); /* Adds semi-transparency for readability */
                border-radius: 8px;
                width: 50%;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            }
            h1 {
                color: #4CAF50;
            }
            p {
                margin: 10px 0;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class='success-container'>
            <h1>Registration Successful!</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Gender:</strong> $gender</p>
            <p><strong>Date of Birth:</strong> $dob</p>
        </div>
    </body>
    </html>
    ";
} else {
    echo "Invalid Request.";
}
?>

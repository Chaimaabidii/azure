<?php 
echo'
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        h1 {
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <h1>Welcome to My Simple PHP Page!</h1>
    <p>
        <?php
            // Display a greeting message
            echo "Hello, visitor! Today s date and time is: ";
            // Display current date and time
            echo date("Y-m-d H:i:s");
        ?>
    </p>
</body>
</html>


'?>
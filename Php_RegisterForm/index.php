<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<h3>Registration Form </h3>

    <form action="cible.php" method="POST">

        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" ><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" ><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" ><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" ><br><br>

        <label>Gender:</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female <br><br>

        <button type="submit">Register</button>

</body>
</html>

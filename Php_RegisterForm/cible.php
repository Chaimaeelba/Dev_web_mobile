<?php

$firstname = $lastname = $email = $password = $confirm_password = $gender = "";
$email_error = $password_error = $general_error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $gender = $_POST['gender'];

    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email address.";
    }

    // Password validation
    if ($password !== $confirm_password) {
        $password_error = "Passwords do not match.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form - Confirm</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h3>Registration Form - Review Your Details</h3>
    <!-- Display errors -->
    <?php if ($email_error): ?>
        <p style="color:red;"><?php echo $email_error; ?></p>
    <?php endif; ?>
    
    <?php if ($password_error): ?>
        <p style="color:red;"><?php echo $password_error; ?></p>
    <?php endif; ?>
    
    <form action="cible.php" method="POST">
        
        <label for="firstname">First Name:</label>
        <input type="text" id="firstname" name="firstname" value="<?php echo htmlspecialchars($firstname); ?>"><br><br>

        <label for="lastname">Last Name:</label>
        <input type="text" id="lastname" name="lastname" value="<?php echo htmlspecialchars($lastname); ?>"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>"><br><br>

        <label for="password">Password:</label>
        <input type="text" id="password" name="password" value="<?php echo htmlspecialchars($password); ?>"><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="text" id="confirm_password" name="confirm_password" value="<?php echo htmlspecialchars($confirm_password); ?>"><br><br>

        <label>Gender:</label>
        <input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>> Female<br><br>

        <button type="submit">Submit</button>

    </form>
</body>
</html>

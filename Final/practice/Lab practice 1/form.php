<?php
 
$nameError = "";
$emailError = "";
$passwordError = "";
$successMessage = "";
 
if (isset($_POST["submit"])) {
 
    // Get values from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
 
    $isValid = true; 
 
    
    if (empty($name)) {
        $nameError = "Name is required.";
        $isValid = false;
    }
 
    
    if (empty($email)) {
        $emailError = "Email is required.";
        $isValid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Invalid email format.";
        $isValid = false;
    }
 
   
    if (empty($password)) {
        $passwordError = "Password is required.";
        $isValid = false;
    } elseif (strlen($password) < 6) {
        $passwordError = "Password must be at least 6 characters.";
        $isValid = false;
    }
 
    
    if ($isValid == true) {
        $successMessage = "Registration successful for " . $name . "!";
        
        
    }
}
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation Demo</title>

    <link rel="stylesheet" href=""> 
</head>
 
<body>
 
<div >
 
    <h2>Form Register</h2>
 
    
    <?php if ($successMessage != "") { ?>
        <h3 style="color: green;">
            <?php echo $successMessage; ?>
        </h3>
    <?php } ?>
 
    <form method="POST">
 
        <label>Name</label>
 
        <input
            type="text"
            name="name"
        >
        
        <div style="color: red; font-size: 14px;">
            <?php echo $nameError; ?>
        </div>
        
        <br>
 
        <label>Email</label>
 
        <input
            type="text"
            name="email"
        >
        
        <div style="color: red; font-size: 14px;">
            <?php echo $emailError; ?>
        </div>

        <br>
 
        <label>Password</label>
 
        <input
            type="password"
            name="password"
        >
        
        <div style="color: red; font-size: 14px;">
            <?php echo $passwordError; ?>
        </div>
        
        <br>
 
        <button type="submit" name="submit">
            Register
        </button>
 
    </form>
 
</div>
 
</body>
</html>
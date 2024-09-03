<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form action="14register.php" method="POST">
        <label for="registerno">Registration Number:</label><br>
        <input type="text" id="registerno" name="registerno" required><br><br>

        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        

        <label for="cellno">Cell Number:</label><br>
        <input type="text" id="cellno" name="cellno" required><br><br>

        <label for="branch">Branch:</label><br>
        <input type="text" id="branch" name="branch" required><br><br>

        

        <input type="submit" value="Register">
    </form>
</body>
</html>

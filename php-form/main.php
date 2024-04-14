<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
        }

        form {
            max-width: 400px;
            margin: auto;
        }

        label {
            font-weight: bold;
            font-size: 18px;
        }

        .radio-container {
            display: flex;
            align-items: center;
        }

        .radio-container label {
            margin-right: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"],
        input[type="submit"],
        input[type="radio"] {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .sex {
            display: flex;
            padding-top: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Registration Form</h1>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="fname">First Name:</label><br>
        <input type="text" id="fname" name="fname" required><br>

        <label for="lname">Last Name:</label><br>
        <input type="text" id="lname" name="lname" required><br>

        <div class="radio-container">
            <label for="sex">Sex:</label>
            <div class="sex">
                <input type="radio" id="male" name="sex" value="male">
                <label for="male">Male</label>
                <input type="radio" id="female" name="sex" value="female">
                <label for="female">Female</label>
            </div>
        </div>

        <label for="dob">Date of Birth:</label><br>
        <input type="date" id="dob" name="dob" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if all form fields are set
        if(isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['sex']) && isset($_POST['dob']) && isset($_POST['email']) && isset($_POST['password'])) {
            // Retrieve form data
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $sex = $_POST['sex'];
            $dob = $_POST['dob'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Display popup with submitted information using JavaScript
            echo "<script>alert('You register successfully');</script>";
        } else {
            echo "<script>alert('Please fill out all fields.');</script>";
        }
    }
    ?>
</div>

</body>
</html>

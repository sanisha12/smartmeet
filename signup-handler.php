<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation (check if fields are not empty)
    if (!empty($name) && !empty($email) && !empty($password)) {
        // Password strength validation
        if (preg_match('/(?=.*\d)(?=.*[!@#$%^&*])[A-Za-z\d!@#$%^&*]{8,}/', $password)) {
            // Example of password hashing (never store plain passwords!)
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Connect to your database
            // $conn = new mysqli('localhost', 'username', 'password', 'database');

            // Example query (you need to create a users table in your database)
            // $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";

            // if ($conn->query($sql) === TRUE) {
            //     echo "New record created successfully";
            // } else {
            //     echo "Error: " . $sql . "<br>" . $conn->error;
            // }

            // Close connection
            // $conn->close();
        } else {
            echo "Password does not meet the required criteria.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Basic validation (check if fields are not empty)
    if (!empty($email) && !empty($password)) {
        // Connect to your database
        // $conn = new mysqli('localhost', 'username', 'password', 'database');

        // Query to check user credentials
        // $sql = "SELECT password FROM users WHERE email = '$email'";
        // $result = $conn->query($sql);

        // Check if user exists
        // if ($result->num_rows > 0) {
        //     $row = $result->fetch_assoc();
        //     $hashed_password = $row['password'];

        //     // Verify password
        //     if (password_verify($password, $hashed_password)) {
        //         echo "Sign-in successful!";
        //         // Redirect to a dashboard or home page
        //         // header("Location: dashboard.html");
        //     } else {
        //         echo "Invalid password.";
        //     }
        // } else {
        //     echo "No user found with that email.";
        // }

        // Close connection
        // $conn->close();
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request method.";
}
?>

<?php

session_start();

// Create a connection
$c = mysqli_connect('localhost', 'root', '', 'kasir');

// Check connection
if (!$c) {
    die("Connection failed: " . mysqli_connect_error());
}

// Login
if (isset($_POST['login'])) {
    // Initiate variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the SQL statement to prevent SQL injection
    $stmt = $c->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);

    // Execute the statement
    $stmt->execute();
    $result = $stmt->get_result();
    $hitung = $result->num_rows;

    if ($hitung > 0) {
        // Data found, successful login
        $_SESSION['login'] = 'True';
        header('location:index.php');
    } else {
        // Data not found, failed login
        echo '
        <script>
        alert("username atau password salah");
        window.location.href="login.php";
        </script>
        ';
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
mysqli_close($c);

?>

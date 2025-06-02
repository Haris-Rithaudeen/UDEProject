<head>
    <title>Kampung Connect</title>
    <?php
        include "inc/head.inc.php";
    ?>
</head>

<body>
    <?php
        include "inc/nav.inc.php";
    ?>
    <?php
        include "inc/header.inc.php";
    ?>

    <?php

    $email = $errorMsg = "";
    $success = true;
    if (empty($_POST["email"]))
    {
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
    else
    {
        $email = sanitize_input($_POST["email"]);
        // Additional check to make sure e-mail address is well-formed.
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorMsg .= "Invalid email format.";
            $success = false;
        }
    }
    if ($success)
    {
        saveMemberToDB();
        echo "<h4>Registration successful!</h4>";
        echo "<p>Email: " . $email;
    }
    else
    {
        echo "<h4>The following input errors were detected:</h4>";
        echo "<p>" . $errorMsg . "</p>";
    }

    /*
    * Helper function that checks input for malicious or unwanted content.
    */
    function saveMemberToDB()
    {
        global $fname, $lname, $email, $pwd_hashed, $errorMsg, $success;
        // Create database connection.
        $config = parse_ini_file('/var/www/private/db-config.ini');
        if (!$config)
        {
            $errorMsg = "Failed to read database config file.";
            $success = false;
        }
        else
        {
            $conn = new mysqli(
                $config['servername'],
                $config['username'],
                $config['password'],
                $config['dbname']
            );
            // Check connection
            if ($conn->connect_error)
            {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            }
            else
            {
                // Prepare the statement:
                $stmt = $conn->prepare("INSERT INTO world_of_pets_members
                    (fname, lname, email, password) VALUES (?, ?, ?, ?)");
                // Bind & execute the query statement:
                $stmt->bind_param("ssss", $fname, $lname, $email, $pwd_hashed);
                if (!$stmt->execute())
                {
                    $errorMsg = "Execute failed: (" . $stmt->errno . ") " .
                        $stmt->error;
                    $success = false;
                }
                $stmt->close();
            }
            $conn->close();
        }
    }

    
    function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <div class="mb-3">
        <button type="submit" href="login.php" class="return">Return to Login</button>
    </div>
    <?php
        include "inc/footer.inc.php";
    ?>
</body>
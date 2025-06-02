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
    <main class="container">
            <h1>Member Registration</h1>
            <p>
                For existing members, please go to the
                <a href="login.php">Sign In page</a>.
            </p>
            <form action="process_register.php" method="post">
                <div class=mb-3>
                    <label class=form-label for="email">Email:</label>
                    <input required maxlength="45" class=form-control type="email" id="email" name="email"
                    placeholder="Enter email">
                </div>
                <div class=mb-3>
                    <label class=form-label for="pwd">Password:</label>
                    <input required class=form-control type="password" id="pwd" name="pwd"
                    placeholder="Enter password">
                </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
            </form>
        </main>
    <?php
        include "inc/footer.inc.php";
    ?>
</body>
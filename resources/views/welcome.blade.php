<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Login Page</title>
</head>
<body>
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header bg-primary text-white text-center">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form id="loginForm">
                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="button" class="btn btn-success btn-block" onclick="validateLogin()">Login</button>
                </form>
            </div>
        </div>
    </div>

    <script>
    function validateLogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "esgae" && password === "esgae") {
        window.location.href = "/enseignants";
    } else {
        alert("Informations de connexion incorrectes");
    }
}

function redirectToCreateAccount() {
    // You can implement the logic to redirect to the create account page
    alert("Redirecting to Create Account page");
    // window.location.href = "/create-account"; // Uncomment this line when you have a create account page.
}
    </script>
</body>
</html>


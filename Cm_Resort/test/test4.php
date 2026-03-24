<form onsubmit="return login()">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <button type="submit">Login</button>
</form>

<script>
function login() {
    // Get the values of the username and password fields
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    // Show a message using alert()
    alert('Username: ' + username + '\nPassword: ' + password);

    // Always prevent the form from submitting to prevent page refresh
    return false;
}
</script>
<?php
/*
Plugin Name: DKon Auth
Description: Custom authentication using DKon API.
Version: 1.0
Author: Aang Sari
*/

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// Add a shortcode for the login form
add_shortcode('dkon_login_form', 'dkon_login_form_shortcode');

function dkon_login_form_shortcode() {
    ob_start();
    ?>
    <form id="dkon-login-form">
        <input type="text" id="dkon-username" placeholder="Username" required>
        <input type="password" id="dkon-password" placeholder="Password" required>
        <button type="submit">Login</button>
        <div id="dkon-login-message"></div>
    </form>
    <script>
        document.getElementById('dkon-login-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('dkon-username').value;
            const password = document.getElementById('dkon-password').value;

            fetch('https://api.dkon.app/api/v3/method/account.signIn', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    clientId: '1302',
                    username: username,
                    password: password
                })
            })
            .then(response => response.json())
            .then(data => {
                if (!data.error && data.error_code === 0) {
                    // Handle successful login (e.g., redirect or show success message)
                    document.getElementById('dkon-login-message').innerText = "Login successful!";
                    // Optionally, redirect or reload
                    window.location.href = "your-redirect-url"; // Replace with your target URL
                } else {
                    document.getElementById('dkon-login-message').innerText = "Login failed. Please check your credentials.";
                }
            })
            .catch(error => {
                document.getElementById('dkon-login-message').innerText = "An error occurred. Please try again.";
            });
        });
    </script>
    <?php
    return ob_get_clean();
}

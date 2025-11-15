# DKon Auth WordPress Plugin

This plugin integrates user authentication into your WordPress site using the DKon API. Users can log in with their credentials through a custom login form, enhancing user experience and managing login processes.

## Features

- User login via username and password.
- Integration with the DKon API for account authentication.
- Customizable login form using a shortcode.
- User feedback for login success or failure.

## Installation

1. **Download the Plugin**:
   Create a directory named `dkon-auth` in your `wp-content/plugins` folder. Inside this directory, create a file named `dkon-auth.php` and paste the provided code.

2. **Activate the Plugin**:
   - Go to your WordPress admin dashboard.
   - Navigate to **Plugins > Installed Plugins**.
   - Find **DKon Auth** and click **Activate**.

3. **Add the Login Form**:
   Use the shortcode `[dkon_login_form]` in any post or page where you want the login form to appear.

## Usage

- Users can log in by entering their username and password in the form provided by the shortcode.
- Upon successful login, users can be redirected to a specified URL.

## Customization

To customize the behavior of the login process:

- Modify the redirection URL in the JavaScript section to fit your site's structure.
- Style the login form using CSS to match your theme.

## Requirements

- WordPress version 4.0 or higher.
- PHP version 7.0 or higher.



## Contributing

Feel free to fork the repository and submit a pull request if you have improvements or new features to add!

## Support

Web: https://DKon.app/dev

For any issues or questions, please create an issue in the repository.

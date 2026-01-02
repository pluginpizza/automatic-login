# Automatic Login WordPress Plugin

Developers rejoice! Skip the login screen during local development. Automatic Login logs you in automatically on your local development environment.

## Quick Start

1. Define the `WP_ENVIRONMENT_TYPE` constant as `local` in your `wp-config.php` file.
2. Create a user with username `admin` and password `password`.

## Log in as another user

By default, Automatic Login uses the 'admin' user. Add the following constants to your `wp-config.php` file to log in as another user:

```php
define( 'AUTOMATIC_LOGIN_USER_LOGIN', 'your-username-here' );
define( 'AUTOMATIC_LOGIN_USER_PASSWORD', 'your-password-here' );
```

**Note:** Automatic Login does not create users. The user must already exist.

### 10up Snapshots

The 'snapshots' and 'wpsnapshots' user names are recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

## Installation

Automatic Login is hosted on the [WordPress plugin directory](https://wordpress.org/plugins/automatic-login/) and can be installed via the WordPress dashboard.

1. Visit the Plugins page within your WordPress dashboard and select ‘Add New’
1. Search for 'Automatic Login' and install the plugin
1. Activate Automatic Login from your Plugins page

### Install Automatic Login as a must-use plugin

Automatic Login also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/):

1. Add the ‘automatic-login.php’ file to the /wp-content/mu-plugins/ directory

### Composer

Automatic Login can be added as a dependency to your project via the [wpackagist composer repository](https://wpackagist.org/search?q=automatic-login).

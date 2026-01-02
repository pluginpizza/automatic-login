=== Automatic Login ===
Contributors: pluginpizza, barryceelen, functionsfile
Tags: autologin, admin, login, local
Requires at least: 5.5.1
Tested up to: 6.9
Stable tag: 3.0.0
License: GPLv3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Log in automatically on your locally hosted WordPress install.

== Description ==

Developers rejoice! Skip the login screen during local development. Automatic Login logs you in automatically on your local development environment.

## Quick Start

1. Define the `WP_ENVIRONMENT_TYPE` constant as `local` in your `wp-config.php` file.
2. Create a user with username `admin` and password `password`.
3. That's it—you'll be logged in automatically!

## Log in as another user

By default, Automatic Login uses the 'admin' user. Add the following constants to your `wp-config.php` file to log in as another user:

```php
define( 'AUTOMATIC_LOGIN_USER_LOGIN', 'your-username-here' );
define( 'AUTOMATIC_LOGIN_USER_PASSWORD', 'your-password-here' );
```

**Note:** Automatic Login does not create users. The user must already exist.

### 10up Snapshots

The 'snapshots' and 'wpsnapshots' user names are automatically recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

### Bug Reports

Do you want to report a bug or suggest a feature for Automatic Login? Best to do so in the Automatic Login [repository on GitHub](https://github.com/pluginpizza/automatic-login/).

== Installation ==

Starting with Automatic Login on your locally hosted WordPress site consists of the following steps:

- Install and activate the plugin.
- Define the `[WP_ENVIRONMENT_TYPE](https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#wp-environment-type)` constant as 'local'.
- Create a user with the user name 'admin' and password 'password'. Note that Automatic Login is intended for local development environments. Do not create these login credentials on publicly accessible sites!

## Log in as another user

By default, Automatic Login uses the 'admin' user. Add the following constants to your `wp-config.php` file to log in as another user:

```php
define( 'AUTOMATIC_LOGIN_USER_LOGIN', 'your-username-here' );
define( 'AUTOMATIC_LOGIN_USER_PASSWORD', 'your-password-here' );
```

**Note:** Automatic Login does not create users. The user must already exist.

### 10up Snapshots

The 'snapshots' and 'wpsnapshots' user names are automatically recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

### Install Automatic Login from within WordPress

1. Visit the Plugins page within your dashboard and select ‘Add New’
1. Search for ‘Automatic Login'
1. Activate Automatic Login from your Plugins page

### Install Automatic Login manually

1. Add the ‘automatic-login’ folder to the /wp-content/plugins/ directory
1. Activate the Automatic Login plugin through the ‘Plugins’ menu in WordPress

### Install Automatic Login as a must-use plugin

Automatic Login also works great as a [must-use plugin](https://wordpress.org/documentation/article/must-use-plugins/):

1. Add the ‘automatic-login.php’ file to the /wp-content/mu-plugins/ directory

Automatic Login contains a `GitHub Plugin URI` plugin header to support updates via the [Git Updater](https://git-updater.com/) plugin.

== Changelog ==

= 3.0.0 =
Release Date: January 2, 2026

- Rename the plugin file from `plugin.php` to `automatic-login.php` to make it easier to use the plugin as a must-use plugin. Existing users will need to reactivate the plugin: renaming the plugin file will unfortunately automatically deactivate the plugin.

= 2.0.0 =
Release Date: July 26, 2024

- Minor updates.

= 1.1.0 =
Release Date: July 25, 2024

- Add support for the 'snapshots' user name in addition to 'wpsnapshots'.

= 1.0.0 =
Release Date: February 11, 2023

- Initial release.

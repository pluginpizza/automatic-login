=== Automatic Login ===
Contributors: pluginpizza, barryceelen, functionsfile
Tags: autologin, admin, login, local
Requires at least: 5.5.1
Tested up to: 6.4
Stable tag: 2.0.0
License: GPLv3+
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Log in automatically on your locally hosted WordPress install.

== Description ==

Developers rejoice! Automatic Login logs you in automatically on your local development installation if the following conditions are met:

- The `WP_ENVIRONMENT_TYPE` constant is defined as 'local'.
- A user exists with the username 'admin' and password 'password'.

Alternatively, the `AUTOMATIC_LOGIN_USER_LOGIN` and `AUTOMATIC_LOGIN_USER_PASSWORD` constants can be used to define the login credentials for Automatic Login. Note that Automatic Login does not create a user for you and the user should already exist.

### WP Snapshots

The 'snapshots' and 'wpsnapshots' user names are automatically recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

### Bug Reports

Do you want to report a bug or suggest a feature for Automatic Login? Best to do so in the Automatic Login [repository on GitHub](https://github.com/pluginpizza/automatic-login/).

== Installation ==

Starting with Automatic Login on your locally hosted WordPress site consists of the following steps:

- Install and activate the plugin.
- Define the `WP_ENVIRONMENT_TYPE` constant as 'local'.
- Create a user with the user name 'admin' and password 'password'. Note that Automatic Login is intended for local development environments. Do not create these login credentials on publicly accessible sites!

Alternatively, the `AUTOMATIC_LOGIN_USER_LOGIN` and `AUTOMATIC_LOGIN_USER_PASSWORD` constants can be used to define the login credenitals for Automatic Login.  Note that Automatic Login does not create a user for you and the user should already exist.

### WP Snapshots

The 'snapshots' and 'wpsnapshots' user names are automatically recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

### Install Automatic Login from within WordPress

1. Visit the Plugins page within your dashboard and select ‘Add New’
1. Search for ‘Automatic Login'
1. Activate Automatic Login from your Plugins page

### Install Automatic Login manually

1. Upload the ‘automatic-login’ folder to the /wp-content/plugins/ directory
1. Activate the Automatic Login plugin through the ‘Plugins’ menu in WordPress

Automatic Login contains a `GitHub Plugin URI` plugin header to support updates via the [Git Updater](https://git-updater.com/) plugin.

== Changelog ==

= 1.1.0 =
Release Date: July 25, 2024

- Add support for the 'snapshots' user name in addition to 'wpsnapshots'.

= 1.0 =
Release Date: February 11, 2023

- Initial release.

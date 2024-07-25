# Automatic Login WordPress Plugin

Developers rejoice! Automatic Login logs you in automatically on your local development installation if the following conditions are met:

- The `WP_ENVIRONMENT_TYPE` constant is defined as 'local'.
- A user exists with the username 'admin' and password 'password'.

Alternatively, the `AUTOMATIC_LOGIN_USER_LOGIN` and `AUTOMATIC_LOGIN_USER_PASSWORD` constants can be used to define the login credentials for Automatic Login. Note that Automatic Login does not create a user for you and the user should already exist.

```
// Credentials for the Automatic Login plugin.
define( 'AUTOMATIC_LOGIN_USER_LOGIN', 'mycooluser' );
define( 'AUTOMATIC_LOGIN_USER_LOGIN', 'mycoolpassword' );
```

### WP Snapshots

The 'snapshots' and 'wpsnapshots' user names are recognized for folks using 10up's [Snapshots](https://github.com/10up/snapshots) project sharing tool.

## Installation

Automatic Login is hosted on the [WordPress plugin directory](https://wordpress.org/plugins/automatic-login/) and can be installed via the WordPress dashboard.

1. Visit the Plugins page within your WordPress dashboard and select ‘Add New’
1. Search for 'Automatic Login' and install the plugin
1. Activate Automatic Login from your Plugins page

### Composer

Automatic Login can be added as a dependency to your project via the [wpackagist composer repository](https://wpackagist.org/search?q=automatic-login).

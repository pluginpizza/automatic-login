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

The 'wpsnapshots' user name is automatically recognized for folks using 10up's [WP Snapshots](https://github.com/10up/wpsnapshots) project sharing tool.

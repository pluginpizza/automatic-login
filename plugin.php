<?php
/**
 * Plugin Name: Automatic Login
 * Description: Log in automatically on your locally hosted WordPress install.
 * Version: 2.0.0
 * Author: Plugin Pizza
 * Author URI: https://plugin.pizza
 * Plugin URI: https://wordpress.org/plugins/automatic-login/
 * License: GPLv3+
 * GitHub Plugin URI: pluginpizza/automatic-login
 *
 * @package PluginPizza\AutomaticLogin
 */

namespace PluginPizza\AutomaticLogin;

// Maybe login automatically.
add_action( 'init', __NAMESPACE__ . '\maybe_login' );

// Maybe check the "Remember Me" checkbox on the login form.
add_action( 'login_footer', __NAMESPACE__ . '\maybe_check_rememberme' );

// Maybe remember me for 399 days.
add_action( 'auth_cookie_expiration', __NAMESPACE__ . '\maybe_set_very_long_auth_cookie_expiration', 10, 3 );

/**
 * Maybe login automatically.
 *
 * Log in automatically when visiting a WordPress admin URL if the following
 * conditions are met:
 *
 * - The 'WP_ENVIRONMENT_TYPE' constant is defined as 'local'.
 * - A user exists with the password 'password' and the username is either
 *  'admin' or 'wpsnapshots'.
 *
 * Alternatively, the `AUTOMATIC_LOGIN_USER_LOGIN` and `AUTOMATIC_LOGIN_USER_PASSWORD`
 * constants can be used to define the login credenitals for Automatic Login.
 *
 * define( 'AUTOMATIC_LOGIN_USER_NAME', 'mycoolusername' );
 * define( 'AUTOMATIC_LOGIN_USER_PASSWORD', 'mycoolpassword' );
 *
 * Note that Automatic Login does not create a user for you, the user should
 * already exist.
 *
 * @return void
 */
function maybe_login() {

	if ( ! is_admin() || is_user_logged_in() ) {
		return;
	}

	if ( ! function_exists( 'wp_get_environment_type' ) || 'local' !== wp_get_environment_type() ) {
		return;
	}

	$user_logins = [ 'admin', 'snapshots', 'wpsnapshots' ];

	if ( defined( 'AUTOMATIC_LOGIN_USER_LOGIN' ) && is_string( AUTOMATIC_LOGIN_USER_LOGIN ) ) {
		array_unshift( $user_logins, AUTOMATIC_LOGIN_USER_LOGIN );
	}

	foreach ( $user_logins as $user_login ) {

		$user_password = 'password';

		if ( defined( 'AUTOMATIC_LOGIN_USER_PASSWORD' ) && is_string( AUTOMATIC_LOGIN_USER_PASSWORD ) ) {
			$user_password = AUTOMATIC_LOGIN_USER_PASSWORD;
		}

		$user = wp_signon(
			array(
				'user_login'    => $user_login,
				'user_password' => $user_password,
				'remember'      => true,
			)
		);

		if ( ! is_wp_error( $user ) && isset( $_SERVER['REQUEST_URI'] ) ) {
			wp_safe_redirect( $_SERVER['REQUEST_URI'] );
			exit();
		}
	}
}

/**
 * Maybe check the "Remember Me" checkbox on the login form.
 *
 * @return void
 */
function maybe_check_rememberme() {

	if ( ! function_exists( 'wp_get_environment_type' ) || 'local' !== wp_get_environment_type() ) {
		return;
	}

	echo '<script>if(document.getElementById("rememberme")){document.getElementById("rememberme").checked=true;}</script>';
}

/**
 * Maybe remember me for 399 days.
 *
 * @see https://chromestatus.com/feature/4887741241229312
 *
 * @param int  $length   Duration of the expiration period in seconds.
 * @param int  $user_id  User ID.
 * @param bool $remember Whether to remember the user login. Default false.
 * @return int
 */
function maybe_set_very_long_auth_cookie_expiration( $length, $user_id, $remember ) {

	if ( ! function_exists( 'wp_get_environment_type' ) || 'local' !== wp_get_environment_type() ) {
		return;
	}

	if ( $remember ) {
		$length = 399 * DAY_IN_SECONDS;
	}

	return $length;
}

<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/

get_header( 'login' );
?>

<div class="tml tml-login" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php $template->the_action_template_message( 'login' ); ?>
	<?php $template->the_errors(); ?>
	<form name="loginform" id="loginform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'login', 'login_post' ); ?>" method="post" class="form-signin">
<h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
			<label for="user_login<?php $template->the_instance(); ?>" class="sr-only"><?php
				if ( 'username' == $theme_my_login->get_option( 'login_type' ) ) {
					_e( 'Username', 'theme-my-login' );
				} elseif ( 'email' == $theme_my_login->get_option( 'login_type' ) ) {
					_e( 'E-mail', 'theme-my-login' );
				} else {
					_e( 'Username or E-mail', 'theme-my-login' );
				}
			?></label>
			<input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="form-control" value="<?php $template->the_posted_value( 'log' ); ?>" size="20" placeholder="Email Address" />

			<label for="user_pass<?php $template->the_instance(); ?>" class="sr-only"><?php _e( 'Password', 'theme-my-login' ); ?></label>
			<input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="form-control" value="" size="20" autocomplete="off" placeholder="Password" />

		<?php do_action( 'login_form' ); ?>

			<div class="checkbox mb-3">
				<input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
				<label for="rememberme<?php $template->the_instance(); ?>"><?php esc_attr_e( 'Remember Me', 'theme-my-login' ); ?></label>
			</div>

				<input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" class="btn btn-lg btn-primary btn-block" value="<?php esc_attr_e( 'Log In', 'theme-my-login' ); ?>" />
				<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
				<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
				<input type="hidden" name="action" value="login" />
		<p class="mt-5 mb-3 text-muted"><a href="/">SUGO ELITE TRAINING</a> &copy; 2018</p>
	</form>
	<?php $template->the_action_links( array( 'login' => false ) ); ?>
</div>

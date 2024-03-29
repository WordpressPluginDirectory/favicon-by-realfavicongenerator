<?php
// Copyright 2014-2016 RealFaviconGenerator
?>

<div class="wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>

	<p>
		<?php
		printf(
			__( 'Do you want to setup your favicon? Go to <a href="%s">Appearance &gt; Favicon</a>', FBRFG_PLUGIN_SLUG ),
			esc_html( $favicon_appearance_url )
		)
		?>
	</p>

	<form action="<?php echo esc_html( $favicon_admin_url ) ?>" method="post">

		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row"><?php esc_html_e( 'Display update notifications', FBRFG_PLUGIN_SLUG ); ?></th>
					<td>
						<input type="checkbox" name="<?php echo esc_html( Favicon_By_RealFaviconGenerator_Admin::DISMISS_UPDATE_ALL_UPDATE_NOTIFICATIONS ) ?>" 
							value="1" <?php echo( $display_update_notifications ? 'checked="checked"' : '' ); ?>>
						<p class="description">
							<?php esc_html_e( 'Get notifications when RealFaviconGenerator is updated. For example, when Apple releases a new version of iOS or a new platform is supported.', FBRFG_PLUGIN_SLUG ); ?>
						</p>
					</td>
				</tr>
			</tbody>
		</table>

		<input type="hidden" name="<?php echo esc_html( Favicon_By_RealFaviconGenerator_Admin::SETTINGS_FORM ) ?>" value="1">

		<input
			type="hidden"
			name="<?php echo esc_html( Favicon_By_RealFaviconGenerator_Admin::NONCE_SETTINGS_UPDATE ) ?>"
			value="<?php echo esc_html( wp_create_nonce( Favicon_By_RealFaviconGenerator_Admin::NONCE_ACTION_NAME_SETTINGS_UPDATE ) ) ?>"
		>

		<input name="Submit" type="submit" class="button-primary" value="<?php esc_html_e( 'Save changes', FBRFG_PLUGIN_SLUG ); ?>">
	</form>

</div>

<?php
if ( preg_match( '#' . basename( __FILE__ ) . '#', $_SERVER['PHP_SELF'] ) ) {
	die( 'You are not allowed to call this page directly.' );
}
/**
 * footer.php - View for the footer on all plugin pages.
 *
 * @package Login Configurator
 * @subpackage includes
 * @author GrandSlambert
 * @copyright 2009-2013
 * @access public
 * @since 2.0
 */
?>

<div class="postbox">
     <h3 class="handl" style="margin:0; padding:3px;cursor:default;">
		<?php _e( 'Plugin Information', 'login-configurator' ); ?>
     </h3>
     <div style="padding:5px;">
          <p><?php _e( 'This page sets the defaults for the plugin. Each of these settings can be overridden when you add an index to your page.', 'login-configurator' ); ?></p>
          <p><span><?php _e( 'You are using', 'login-configurator' ); ?> <strong> <a href="https://grandslambert.com/plugins/login-configurator" target="_blank"><?php echo $this->pluginName; ?> <?php echo $this->version; ?></a></strong> by <a href="https://grandslambert.com" target="_blank">GrandSlambert</a>.</span> </p>
     </div>
</div>
<div class="postbox">
     <h3 class="handl" style="margin:0; padding:3px;cursor:default;">
		<?php _e( 'Usage', 'login-configurator' ); ?>
     </h3>
     <div style="padding:5px;">
          <p><?php printf( __( 'See the %2s for this plugin for more details on what each of these settings does.', 'login-configurator' ), '<a href="https://grandslambert.com/plugins/login-configurator/documentation" target="_blank">' . __( 'Documentation Page', 'login-configurator' ) . '</a>' );
		?></p>
     </div>
</div>
<div class="postbox">
	<h3 class="handl" style="margin:0; padding:3px;cursor:default;"><?php _e( 'Credits', 'login-configurator' ); ?></h3>
	<div style="padding:8px;">
		<p>
			<?php
			printf( __( 'Thank you for trying the %1$s plugin - I hope you find it useful. For the latest updates on this plugin, vist the %2$s. If you have problems with this plugin, please use our %3$s or check out the %4$s.', 'login-configurator' ),
				$this->pluginName, '<a href="https://grandslambert.com/plugins/login-configurator" target="_blank">' . __( 'official site', 'login-configurator' ) . '</a>',
				'<a href="https://wordpress.org/support/plugin/login-configurator/" target="_blank">' . __( 'Support Forum', 'login-configurator' ) . '</a>',
				'<a href="https://grandslambert.com/plugins/login-configurator/documentation" target="_blank">' . __( 'Documentation Page', 'login-configurator' ) . '</a>'
			);
			?>
		</p>
		<p>
			<?php
			printf( __( 'This plugin is &copy; %1$s by %2$s and is released under the %3$s', 'login-configurator' ), '2009-' . date( "Y" ), '<a href="https://grandslambert.com" target="_blank">GrandSlambert</a>', '<a href="https://www.gnu.org/licenses/gpl.html" target="_blank">' . __( 'GNU General Public License', 'login-configurator' ) . '</a>'
			);
			?>
		</p>
	</div>
</div>
<div class="postbox">
	<h3 class="handl" style="margin:0; padding:3px;cursor:default;"><?php _e( 'Donate', 'login-configurator' ); ?></h3>
	<div style="padding:8px">
		<p>
			<?php printf( __( 'If you find this plugin useful, please consider supporting this and our other great %1$s.', 'login-configurator' ), '<a href="https://grandslambert.com/plugins/" target="_blank">' . __( 'plugins', 'login-configurator' ) . '</a>' ); ?>
			<a href="https://www.paypal.com/donate/?business=ZELD6TZ4T8KAL&no_recurring=0&item_name=Donate+to+the+Login+Configurator+Plugin.&currency_code=USD" target="_blank"><?php _e( 'Donate a few bucks!', 'login-configurator' ); ?></a>
		</p>
	</div>
</div>
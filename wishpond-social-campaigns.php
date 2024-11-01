<?php
  /*
    Plugin Name: Wishpond Social Promotions
    Plugin URI:  https://wordpress.org/plugins/wishpond-social-campaigns/
    Description: Run promotional campaigns on your WordPress site that spread quickly on Facebook and Twitter and drive new customers.
    Version:     2.1
    Author:      Wishpond
    Author URI:  https://www.wishpond.com/
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    Text Domain: wishpond-social-campaigns
    Domain Path: /lang

    Wishpond Social Promotions is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 2 of the License, or
    any later version.

    Wishpond Social Promotions is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with Wishpond Social Promotions. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
  */

  load_plugin_textdomain('wishpond-social-campaigns', false, dirname(plugin_basename(__FILE__)) . '/lang/');

  $WP_PLUGIN_FILES = array(
    'constants.php',
    'class-wishpond-campaign.php',
    'class-wishpond-plugin.php',
    'class-wishpond-shortcode.php',
    'class-wishpond-utilities.php'
  );

  foreach($WP_PLUGIN_FILES as $file) {
    include_once(plugin_dir_path(__FILE__) . $file);
  }

  new WishpondPlugin(
    array(
      'version' => '2.1',
      'name' => 'wishpond_social_campaigns',
      'slug' => 'wishpond-social-campaigns',
      'menu' => array(
        'main'      => __('Social Promotions', 'wishpond-social-campaigns'),
        'dashboard' => __('Dashboard', 'wishpond-social-campaigns'),
        'editor'    => __('New Contest', 'wishpond-social-campaigns'),
        'settings'  => __('Settings', 'wishpond-social-campaigns')
      )
    )
  );
?>
